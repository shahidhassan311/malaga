<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\User;
use App\Property_images;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Response;

class WebController extends Controller
{
    public function property_collection()
    {
        $property_type = DB::table('property_type')
            ->select('*')
            ->get();

        $property_sale_type = DB::table('property_sale_type')
            ->select('*')
            ->get();

        $property_detail = DB::table('property as p')
            ->leftjoin('property_image as pi', 'p.id', 'pi.property_id')
            ->leftjoin('property_type as pt', 'p.type', 'pt.id')
            ->leftjoin('property_sale_type as pst', 'p.sale_type', 'pst.id')
            ->select('p.*', 'pi.images', 'pt.type as property_type', 'pst.sale_type as property_sale_type')
            ->where('p.status', "Active")
            ->groupBy('p.id')
            ->get();

        return view('website.properties_collection', compact('property_detail', 'property_type', 'property_sale_type'));
    }

    public function property_collection_details($id)
    {

        $property_detail = DB::table('property as p')
            ->leftjoin('property_type as pt', 'p.type', 'pt.id')
            ->leftjoin('property_sale_type as pst', 'p.sale_type', 'pst.id')
            ->select('p.*', 'pt.type as property_type', 'pst.sale_type as property_sale_type')
            ->where('p.id', $id)
            ->get();

        $property_detail_images = DB::table('property_image')
            ->select('*')
            ->where('property_id', $id)
            ->get();

        return view('website.single_property', compact('property_detail', 'property_detail_images'));
    }

    public function search_filter(Request $request)
    {

        $property_type_list = DB::table('property_type')
            ->select('*')
            ->get();

        $property_sale_type_list = DB::table('property_sale_type')
            ->select('*')
            ->get();

        $query = '';
        $type = '';
        $property_type = $request->input('property_type');
        $property_sale_type = $request->input('property_sale_type');
        $area = $request->input('area');
        $price = $request->input('price');
        $bedrooms = $request->input('bedrooms');
        $bathrooms = $request->input('bathrooms');


        if (!empty($property_type == 'all')) {
            $query = "SELECT property.*,property_image.images FROM property LEFT JOIN property_image ON property.id = property_image.property_id";
        } else {
            $query = "SELECT property.*,property_image.images FROM property LEFT JOIN property_image ON property.id = property_image.property_id WHERE property.type = $property_type";

        }

        if (!empty($property_sale_type !== "all")) {
            $query .= " AND property.sale_type = $property_sale_type";
        }

        if (!empty($area)) {
            $query .= " AND property.location LIKE '%" . $area . "%'";
        }
        if (!empty($price)) {
            $query .= " AND property.price_from LIKE '%" . $price . "%'";
        }
        if (!empty($bedrooms)) {
            $query .= " AND property.bedroom = $bedrooms";
        }

        if (!empty($bathrooms)) {
            $query .= " AND property.bathroom = $bathrooms";
        }

        if ($property_type) {
            $query .= " GROUP BY property_image.property_id";
        }

        if (!empty($query)) {
            $result = DB::select(DB::raw($query));
        } else {
            $result = "Please select any property type!";
        }

        return view('website.search_result', compact('result', 'type', 'property_sale_type_list', 'property_type_list'));

    }

    public function index()
    {
        return view('website.index');
    }

    public function about()
    {
        return view('website.about');
    }

    public function rentals()
    {
        return view('website.rentals');
    }

    public function contact()
    {
        return view('website.contact');
    }

    public function requirements()
    {
        return view('website.property-requirements');
    }

    public function investment()
    {
        return view('website.invest');
    }

    public function legal_services()
    {
        return view('website.legal');
    }

    public function property_management()
    {
        return view('website.management');
    }

    public function privacy_policy()
    {
        return view('website.privacy');
    }


    function createAPIURL($url, $params)
    {
        $paramStr = implode('&', array_map(function ($v, $k) {
            return $k . '=' . $v;
        }, $params, array_keys($params)));
    }

    function createSearchResaleAPI()
    {

        global $resaleResultsUrl;
//        global $contactId;
//        global $country;
//        global $language;
//        global $pPreferred;
//        global $pOwn;

        $resaleResultsUrl = $this->createAPIURL(
            SearchResaleAPI,
            array(
                'p1' => "1021432",
                'p2' => "42dabd80ab51b924a27012aa95e0d85b2a6f6696",
                'P_Country' => "spain",
                'Lang' => "english",
//                'P_Preferred' => $pPreferred,
//                'P_Own' => $pOwn,
//                'P_Min' => $pMin,
//                'P_Max' => $pMax,
//                'P_Beds' => $pBed,
//                'P_Baths' => $pBaths
            )
        );

    }

}

//http://webkit.resales-online.com/weblink/xml/V4-2/SearchResaleXML.asp?p1=1021432&p2=42dabd80ab51b924a27012aa95e0d85b2a6f6696&P_Country=spain&Lang=english&P_Preferred=yes&P_Own=yes&P_Min=1&P_Max=100000000&P_Beds=1&P_Baths=1
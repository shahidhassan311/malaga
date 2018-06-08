<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\User;
use App\Property_images;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminpanelController extends Controller
{
    public function dashboard()
    {
        return view('adminpanel.dashboard');
    }

    public function add_property(){
        $property_type = DB::table('property_type')
            ->select('*')
            ->get();

        $property_sale_type = DB::table('property_sale_type')
            ->select('*')
            ->get();
        return view('adminpanel.add_property',compact('property_type','property_sale_type'));
    }
    public function properties(Request $request){
        $type_check = Auth::user()->role;
        if ($type_check == "admin") {
            $property_detail = DB::table('property as p')
                ->leftjoin('property_type as pt','p.type','pt.id')
                ->leftjoin('property_sale_type as pst','p.sale_type','pst.id')
                ->select('p.*','pt.type as property_type','pst.sale_type as property_sale_type')
                ->get();

            return view('adminpanel.properties',compact('property_detail'));

        } else {
            return redirect('/login');
        }
    }
    public function properties_detail(Request $request,$id){
        $type_check = Auth::user()->role;
        if ($type_check == "admin") {
            $property_detail = DB::table('property as p')
                ->leftjoin('property_type as pt','p.type','pt.id')
                ->leftjoin('property_sale_type as pst','p.sale_type','pst.id')
                ->select('p.*','pt.type as property_type','pst.sale_type as property_sale_type')
                ->where('p.id',$id)
                ->get();

            $property_detail_images = DB::table('property_image')
                ->select('*')
                ->where('property_id',$id)
                ->get();

            return view('adminpanel.properties_detail',compact('property_detail','property_detail_images'));

        } else {
            return redirect('/login');
        }
    }
    public function add_property_store(Request $request){
        $type_check = Auth::user()->role;
        if ($type_check == "admin") {
//            $this->validate($request, [
//                'property_name' => 'required',
//                'property_location' => 'required',
//                'property_prive_from' => 'required',
//                'property_bedroom' => 'required',
//                'property_bathroom' => 'required',
//                'property_type' => 'required',
//                'property_details' => 'required',
//            ]);
            $property_name = $request->input('property_name');
            $property_location = $request->input('property_location');
            $property_prive_from = $request->input('property_prive_from');
            $property_status = $request->input('property_status');
            $property_bedroom = $request->input('property_bedroom');
            $property_bathroom = $request->input('property_bathroom');
            $property_type = $request->input('property_type');
            $sale_type = $request->input('sale_type');
            $property_details = $request->input('property_details');

            $temp_name = rand(1, 1000000);
            $hall = new Property;
            $hall->property_id = $temp_name;
            $hall->name = $property_name;
            $hall->location = $property_location;
            $hall->price_from = $property_prive_from;
            $hall->status = $property_status;
            $hall->bedroom = $property_bedroom;
            $hall->bathroom = $property_bathroom;
            $hall->type = $property_type;
            $hall->sale_type = $sale_type;
            $hall->details = $property_details;
            $hall->save();



            if ($files = $request->file('property_images')) {
                foreach ($files as $file) {
                    $temp_name = rand(1, 1000000);
                    $destinationPath = public_path('uploads');
                    $file->move($destinationPath, $temp_name . "." . $file->getClientOriginalExtension());

                    $sales = new Property_images;
                    $sales->images = $temp_name . "." . $file->getClientOriginalExtension();
                    $sales->property_id = $hall->id;
                    $sales->save();
                }
            }


            if ($hall->save() == true) {
                $request->session()->flash('alert-success', 'Successfully Create!');
                return redirect('/add_property');
            } else {
                $request->session()->flash('alert-danger', 'Something Went Wrong!');
                return redirect("/add_property")->with('token', csrf_token());
            }

        } else {
            return redirect('/login');
        }
    }
    public function properties_delete(Request $request,$id){
        $type_check = Auth::user()->role;
        if ($type_check == "admin") {
            DB::table('property')->where('id', $id)->delete();
            DB::table('property_image')->where('property_id', $id)->delete();

            $request->session()->flash('alert-success', 'Successfully Delete!');
            return redirect('/properties');

        } else {
            return redirect('/login');
        }
    }
    public function properties_status($id,$CurrentStatus){
        $type_check = Auth::user()->role;
        if($type_check == "admin") {

            $properties = DB::table('property')->where('id', $id);
            if($CurrentStatus == 'Pending'){
                $properties->update(['status' => 'Active']);
            }else{
                $properties->update(['status' => 'Pending']);
            }
            return redirect('/properties');

        }else{
            return redirect('/login');
        }
    }
    public function property_update_get($id){
        $property_type = DB::table('property_type')
            ->select('*')
            ->get();

        $property_sale_type = DB::table('property_sale_type')
            ->select('*')
            ->get();
        $property_detail = DB::table('property')
            ->select('*')
            ->where('id',$id)
            ->get();

        $property_detail_images = DB::table('property_image')
            ->select('*')
            ->where('property_id',$id)
            ->get();
        return view('adminpanel.properties_update',compact('property_sale_type','property_detail','property_detail_images','property_type'));
    }
    public function property_update_store(Request $request,$id){
        $type_check = Auth::user()->role;
        if($type_check == "admin") {
            if($request->input('_token')){
//                $this->validate($request, [
//                    'property_name' => 'required',
//                    'property_location' => 'required',
//                    'property_prive_from' => 'required',
//                    'property_bedroom' => 'required',
//                    'property_bathroom' => 'required',
//                    'property_details' => 'required',
//                    'property_type' => 'required',
//                ]);
                $property_name = $request->input('property_name');
                $property_location = $request->input('property_location');
                $property_prive_from = $request->input('property_prive_from');
                $property_status = $request->input('property_status');
                $property_bedroom = $request->input('property_bedroom');
                $property_bathroom = $request->input('property_bathroom');
                $property_type = $request->input('property_type');
                $sale_type = $request->input('sale_type');
                $property_details = $request->input('property_details');


                //create new object
                $sales = DB::table('property')->where('id', $id);

                $sales->update(array(
                    'name'=>$property_name,
                    'location'=>$property_location,
                    'price_from'=>$property_prive_from,
                    'status'=>$property_status,
                    'bedroom'=>$property_bedroom,
                    'bathroom'=>$property_bathroom,
                    'type'=>$property_type,
                    'sale_type'=>$sale_type,
                    'details'=>$property_details,

                ));

                $in_id = $request->input('in_id');
                if ($files = $request->file('property_images')){

                    foreach($files as $file){
                        $temp_name = rand(1,1000000);
                        $destinationPath = public_path('uploads');
                        $file->move($destinationPath,$temp_name.".".$file->getClientOriginalExtension());

                        $home_listinf_img = new Property_images();
                        $home_listinf_img->property_id = $id;
                        $home_listinf_img->images = $temp_name.".".$file->getClientOriginalExtension();
                        $home_listinf_img->save();
                    }
                }
                $request->session()->flash('alert-success', 'Successfully Update Property Ads!');
                return redirect("/properties");

            }else{
                $request->session()->flash('alert-warning', 'Something Went Wrong Please Try Again!');
                return redirect("/properties");
            }
        }else{
            return redirect('/login');
        }
    }
    public function property_image_delete(Request $request , $id, $string_id){
        $type_check = Auth::user()->role;
        if ($type_check == "admin") {
            DB::table('property_image')->where('id', $id)->delete();

            $request->session()->flash('alert-success', 'Successfully Delete!');
            return redirect('/property_update_get/'.$string_id);

        } else {
            return redirect('/login');
        }
    }


}
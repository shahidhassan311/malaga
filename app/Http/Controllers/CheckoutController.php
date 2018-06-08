<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CheckoutController extends Controller
{
//    public function charge(Request $request)
//    {
//        try {
//            Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
//
//            $customer = Customer::create(array(
//                'email' => $request->stripeEmail,
//                'source' => $request->stripeToken
//            ));
//
//            $charge = Charge::create(array(
//                'customer' => $customer->id,
//                'amount' => 1999,
//                'currency' => 'usd'
//            ));
//
//            return 'Charge successful, you get the course!';
//        } catch (\Exception $ex) {
//            return $ex->getMessage();
//        }
//    }
//
//    public function index_page()
//    {
//        return view('website.index');
//    }
//    public function request_page(){
//        return view('website.submit_a_request');
//    }
//    public function request_search(Request $request){
//        $first_name = $request->input('first_name');
//        $last_name = $request->input('last_name');
//        $email = $request->input('email');
//        $phone = $request->input('phone');
//        $property_type = $request->input('property_type');
//        $no_of_bedroom = $request->input('no_of_bedroom');
//        $uni_college = $request->input('uni_college');
//        $transportation = $request->input('transportation');
//        $distance_of_uni = $request->input('distance_of_uni');
//        $price_range_per_month = $request->input('price_range_per_month');
//        $length_of_lease = $request->input('length_of_lease');
//        $move_in_date = $request->input('move_in_date');
//        $parking = $request->input('parking');
//        $additional_comments = $request->input('additional_comments');
//
//
//        echo "property result";
//        exit;
//
//
//
//        return view('website.submit_a_request');
//    }
}

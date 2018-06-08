<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\User;
use App\Property_images;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Response;
use Mail;

class MailController extends Controller
{
    public function send(Request $request){

        $property_id = $request->input('property_id');
        $user_name = $request->input('user_name');
        $email_address = $request->input('email_address');
        $contact = $request->input('contact');
        $comment = $request->input('comment');

        $property = DB::table('property')->select('*')->where('id',$property_id)->get();
        $property_name = '';
        foreach ($property as $propertys){
            $property_name = $propertys->name;

        }

        $data =  array(
            'property_name' => $property_name,
            'name' => $user_name,
            'email' => $email_address,
            'contact' => $contact,
            'comment' => $comment,

        );


        Mail::send('website.email_template',$data, function ($message) {

            $message->from('mail@bergestategroup.com', 'Contact');

            $message->to('info@malagaclass.com')->subject('MALAGACLASS PROPERTY INQUIRE');

        });

        return redirect('/property_collection_details/'.$property_id);
    }

    public function contact_form(Request $request){
        $this->validate($request, [
                'first_name' => 'required',
                'email' => 'required',
                'privacy' => 'required',
            ]);

        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $email = $request->input('email');
        $comment = $request->input('comment');
        $privacy = $request->input('privacy');



        $data =  array(
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
            'comment' => $comment,
            'privacy' => $privacy,
        );


        Mail::send('website.contact_email_template',$data, function ($message) {

            $message->from('mail@bergestategroup.com', 'Contact');

            $message->to('info@malagaclass.com')->subject('MALAGACLASS CONTACT');

        });

        return redirect('/contact');
//        return redirect('/contact')->withInput($request);
    }


//
//MAIL_DRIVER=smtp
//MAIL_HOST=send.one.com
//MAIL_PORT=465
//MAIL_USERNAME=malagaclass.com
//MAIL_PASSWORD=malaga123
//MAIL_ENCRYPTION=tls
}
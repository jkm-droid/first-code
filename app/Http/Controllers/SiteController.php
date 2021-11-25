<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SiteController extends Controller
{
    public function show_welcome_page(){
        return view('site.welcome');
    }

    public function show_systems(){
        return view('site.systems');
    }

    public function save_contact_message(Request $request){
        $validator = Validator::make($request->all(),[
            'email'=>'required|email',
            'message'=>'required'
        ]);

        if ($validator->passes()) {
            $email = trim($request->email);
            $message = $request->message;
            $contact = new Contact();
            $contact->email = $email;
            $contact->message = $message;
            if ($contact->save())
                $status = 200;
            else
                $status = 201;

            $data = array(
                'status' => $status,
                'message' => 'success'
            );

            return response()->json($data);
        }

        $data = array(
            'status' => 202,
            'message' => $validator->errors()
        );

        return response()->json($data);
    }
}

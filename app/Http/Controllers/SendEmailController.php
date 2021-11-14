<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendEmailController extends Controller
{
    //
    public function index(){
        return view('contact');
    }

    public function send(Request $request){
        /*$request=array(
            'name'=>request('contact_name'),
            'email'=>request('contact_email'),
            'message'=>request('contact_message')
        );*/
        $this->validate($request,
            ['contact_name'=>'required',
            'contact_email'=>'email',
            'contact_message'=>'message']

    );
    }
}

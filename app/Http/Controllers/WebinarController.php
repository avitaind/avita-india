<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;


use App\Http\Requests;
use App\Webinar;


class WebinarController extends Controller
{
    
    public function index(){

        return view('webinar');
    }
 
  
    public function storeDevice(Request $request){

        $this->validate($request, [
            'name' =>  'required',
            'email' =>  'required|unique:webinar',
            'college_name' =>  'required',
            'college_id' =>  'required',
            'referred_by' =>  'required',
            'education' =>  'required',
            'gender' =>  'required',
            'age' =>  'required',
            'comment' =>  'required',
         ]);
     
        $webinar = new Webinar([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'college_name' => $request->get('college_name'),
            'college_id' => $request->get('college_id'),
            'referred_by' => $request->get('referred_by'),
            'education' => $request->get('education'),
            'gender' => $request->get('gender'),
            'age' => $request->get('age'),
            'comment' => $request->get('comment'),

        ]);

        $webinar->save();

        // \Mail::send('emails.webinar',
        // array(
        //     'name' => $request->get('name'),
         
        // ), function ($message) use ($request)
        // {
        //     $email = $request->input('email');
        //     $name = $request->input('name');
        //     $message->from('contact@avita-india.com','AVITA India');
        //     $message->to($email, $name)->subject('AVITA India | Webinar Registration');
        //     $message->to('avitaind@gmail.com', 'AVITA Campus Ambassador Program');
        //     $message->replyTo('contact@avita-india.com', 'AVITA INDIA | Webinar Registration');
        // });
     
        return redirect()->back()->with('message', 'Thank you for your submission. You shall receive a confirmation mail shortly!');

    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;


use App\Http\Requests;

use App\Campus;
use App\ReferralCode;

class CampusController extends Controller
{
    public function index()
    {

        return view('campus');
    }


    public function storeDevice(Request $request)
    {
        $this->validate($request, [
            'name' =>  'required',
            'email' =>  'required',
            'phone' =>  'required',
            'internship' =>  'required',
            'college' =>  'required',
            'team' =>  'required',
            'represent' =>  'required',
            // 'referral_code' => 'required',

        ]);

        $campus = new Campus([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'internship' => $request->get('internship'),
            'college' => $request->get('college'),
            'team' => $request->get('team'),
            'represent' => $request->get('represent'),
            'referral_code' => $request->get('referral_code'),

        ]);

        $items = DB::table('referral_codes')
             ->select('id', 'code', 'name')
             ->where('code','=', $request->referral_code)
             ->first();

            //  dd($items);

             if($items == NUll)
             {
                return redirect()->back()->with("error", "Referral code is not valid !");
             }

        $result = $campus->save();

        // $campus->save();

        \Mail::send(
            'emails.campus',
            array(
                'name' => $request->get('name'),

            ),
            function ($message) use ($request) {
                $email = $request->input('email');
                $name = $request->input('name');
                $message->from('contact@avita-india.com', 'Campus Ambassador Program');
                $message->to($email, $name)->subject('Campus Ambassador Program');
                $message->to('avitacampusambassador@gmail.com', 'AVITA Campus Ambassador Program');
                $message->replyTo('avitacampusambassador@gmail.com', 'AVITA Campus Ambassador Program');
                $message->replyTo('contact@avita-india.com', 'AVITA INDIA');
            }
        );

        if ($result) {
            return redirect()->back()->with('message', 'Thank you for your submission. You shall receive a confirmation mail shortly!');
        }
        
    }
}

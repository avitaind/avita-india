<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;


use App\Http\Requests;

use App\Subscription;

class SubscriptionController extends Controller
{
    public function handleSubscription(Reqest $request){

        $subscription = new Subscription([
            'email' => $request->get('email'),
        ]);
        $subscription->save();

        \Mail::send('emails.subscription',
        array(
            'email' => $request->get('email'),
        ), function ($message) use ($request)
        {
            $email = $request->input('email');
     
            $message->from('contact@avita-india.com');
            $message->to($email)->subject('AVITA INDIA | Subscription');
        });
        return redirect()->back()->with('message', 'Thank you for your submission. You shall receive a confirmation mail shortly!');

    }
}

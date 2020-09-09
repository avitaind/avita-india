<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

use App\Http\Requests;
use App\Subscription;

class SubscriptionController extends Controller
{
 
  
  public function handleSubscription(Request $request){

     $subscription = new Subscription([
      'email' => $request->get('subscription_email'),
      
      ]);

         $Subscription->save();

       \Mail::send('emails.subscription',
        array(
         'email' => $request->get('subscription_email'),
         
        ), function ($message) use ($request)
      {
            $email = $request->input('subscription_email');
          
           $message->from('contact@avita-india.com');
           $message->to($email, $name)->subject('AVITA INDIA | SUBSCRIPTION');
       });
     
        return redirect()->back()->with('message', 'Thank you for your subscription!');

    }

    
    
/*
    public function storeDevice(Request $request){

      $this->validate($request, [
          'email' =>  'required|email',
        ]);
   
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
           $message->from('contact@avita-india.com','AVITA INDIA');
          $message->to($email)->subject('AVITA INDIA | Subscriber');
          $message->replyTo('contact@avita-india.com', 'AVITA INDIA');
      });
   
      return redirect()->back()->with('message', 'Thank you for your subscription. You shall receive a mail shortly!');

  }

 
*/
}


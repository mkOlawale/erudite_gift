<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Paystack;
use App\Models\payments;
use App\Models\orders;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway(Request $request)
    { 
        try{
            $request->validate([
                'email' => 'required|email',
                'amount' => 'required|numeric|min:100',
            ]);
            $data = [
                'email' => $request->email,
                'amount' => $request->amount * 100, // Convert to kobo
                "currency" => "NGN"
                'metadata' => [
                    'title' => $request->title,
                    'first_name' => $request->Rname,
                    'last_name' => $request->lname,
                    'country' => $request->Country,
                    'state' => $request->state,
                    'city' => $request->city,
                    'address' => $request->address,
                    'number' => $request->snumber,
                    'Reciever_number' => $request->r_number,
                    'image' => $request->image,
                    'notes' => $request->notes,
            ],
                ];
                // dd($data['amount']);
            return Paystack::getAuthorizationUrl($data)->redirectNow();
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }        
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();
        dd($paymentDetails);
        if ($paymentDetails['data']['status'] === 'success') {
            $order = new orders;
            $order->user_id = Auth::User()->id;
            $order->title = $paymentDetails['data']['metadata']['title'];
            $order->first_name = $paymentDetails['data']['metadata']['first_name'];
            $image = $paymentDetails['data']['metadata']['image'];
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $order->image = $image;
            $order->last_name = $paymentDetails['data']['metadata']['last_name'];
            $order->country = $paymentDetails['data']['metadata']['country'];
            $order->state = $paymentDetails['data']['metadata']['state'];
            $order->city = $paymentDetails['data']['metadata']['city'];
            $order->address = $paymentDetails['data']['metadata']['address'];
            $order->snumber = $paymentDetails['data']['metadata']['snumber'];
            $order->Reciever_number = $paymentDetails['data']['metadata']['Reciever_number'];
            $order->notes = $paymentDetails['data']['metadata']['notes'];
            $order->status = "Success";
            $order->save();
            $payment = new payments;
            $payment->email = $paymentDetails['data']['customer']['email'];
            $payment->amount = $paymentDetails['data']['amount'];
            $payment->status = $paymentDetails['data']['status'];
            $payment->ref_id = $paymentDetails['data']['reference'];
            $payment->trans_id = $paymentDetails['data']['id'];
            $payment->save();
            return view('congrats')->with('payment succesful made');
        }
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}
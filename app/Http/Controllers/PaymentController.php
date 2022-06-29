<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Payment;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Paystack;


class PaymentController extends Controller
{

    public function verifyForPayment()
    {
        if (!session()->get('apply')) {
            return Redirect::back();
        }
    }


    public function index()
    {
        $this->verifyForPayment();
        $setting = Setting::find(1);
        return view('payment', compact('setting'));
    }
    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        try {
            return Paystack::getAuthorizationUrl()->redirectNow();
        } catch (\Exception $e) {
            return Redirect::back()->withMessage(['msg' => 'The paystack token has expired. Please refresh the page and try again.', 'type' => 'error']);
        }
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        if ($paymentDetails['status']) {
            $payment = new Payment();
            $payment->apply_id = session()->get('apply')['id'];
            $payment->total = ($paymentDetails['data']['amount'] / 100);
            $payment->status = "paid";
            $payment->save();

            session()->forget('apply');

            return redirect()->route('application');
        }
        // Now you have the payment details,
        // you can then redirect or do whatever you want
    }
}
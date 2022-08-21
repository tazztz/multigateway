<?php

namespace Turtlecap\Multigateway\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Unicodeveloper\Paystack\Facades\Paystack;
use Turtlecap\Multigateway\Facades\TzMultiGateway;

class PaystackPaymentController extends Controller
{
    public function redirect_to_gateway(Request $request){
        TzMultiGateway::paystack()->setConfig();

        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            abort(405,$e->getMessage());
        }
    }
}

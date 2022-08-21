<?php

namespace Turtlecap\Multigateway\Facades;

use Illuminate\Support\Facades\Facade;
use Turtlecap\Multigateway\Base\MultiGatewayHelpers;

/**
 * @see GlobalCurrency
 * @method static script_currency_list()
 * 
 * @see MultiGatewayHelpers
 * @method static stripe()
 * @method static paypal()
 * @method static midtrans()
 * @method static paytm()
 * @method static razorpay()
 * @method static mollie()
 * @method static flutterwave()
 * @method static paystack()
 * @method static payfast()
 * @method static cashfree()
 * @method static instamojo()
 * @method static marcadopago()
 * @method static payumoney()
 */
class TzMultiGateway extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'TzMultiGateway';
    }
}

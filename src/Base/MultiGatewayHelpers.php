<?php

namespace Turtlecap\Multigateway\Base;

use Turtlecap\Multigateway\Base\Gateways\CashFreePay;
use Turtlecap\Multigateway\Base\Gateways\FlutterwavePay;
use Turtlecap\Multigateway\Base\Gateways\InstamojoPay;
use Turtlecap\Multigateway\Base\Gateways\MidtransPay;
use Turtlecap\Multigateway\Base\Gateways\MolliePay;
use Turtlecap\Multigateway\Base\Gateways\PayFastPay;
use Turtlecap\Multigateway\Base\Gateways\PaypalPay;
use Turtlecap\Multigateway\Base\Gateways\PaystackPay;
use Turtlecap\Multigateway\Base\Gateways\PaytmPay;
use Turtlecap\Multigateway\Base\Gateways\PayUmoneyPay;
use Turtlecap\Multigateway\Base\Gateways\RazorPay;
use Turtlecap\Multigateway\Base\Gateways\StripePay;
use Turtlecap\Multigateway\Base\Gateways\MarcadoPagoPay;

class MultiGatewayHelpers
{

    public function stripe() : StripePay
    {
        return new StripePay();
    }
    public function paypal() : PaypalPay
    {
        return new PaypalPay();
    }
    public function midtrans() : MidtransPay
    {
        return new MidtransPay();
    }
    public function paytm() : PaytmPay
    {
        return new PaytmPay();
    }
    public function razorpay() : RazorPay
    {
        return new RazorPay();
    }
    public function mollie() : MolliePay
    {
        return new MolliePay();
    }
    public function flutterwave() : FlutterwavePay
    {
        return new FlutterwavePay();
    }
    public function paystack() : PaystackPay
    {
        return new PaystackPay();
    }

    public function payfast() : PayFastPay
    {
        return new PayFastPay();
    }
    public function cashfree() : CashFreePay
    {
        return new CashFreePay();
    }
    public function instamojo() : InstamojoPay
    {
        return new InstamojoPay();
    }
    public function marcadopago() : MarcadoPagoPay
    {
        return new MarcadoPagoPay();
    }
    public function payumoney() : PayUmoneyPay
    {
        return new PayUmoneyPay();
    }
    public function script_currency_list(){
        return GlobalCurrency::script_currency_list();
    }
}

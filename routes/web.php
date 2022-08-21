<?php

/*
|--------------------------------------------------------------------------
| multigateway Routes
|--------------------------------------------------------------------------
|
| Here is where you can register routes for your package.
|
*/

/* ----------------------------------------
    STRIPE ROUTE
---------------------------------------- */
Route::group(['middleware' => 'web'],function (){
    /**
     *  STRIPE PAYMENT ROUTE
     * */
    Route::post('tzpayment-gateway/stipe',[\Turtlecap\Multigateway\Http\Controllers\StripePaymentController::class,'charge_customer'])->name('tz.payment.gateway.stripe');
    Route::post('tzpayment-gateway/paystack',[\Turtlecap\Multigateway\Http\Controllers\PaystackPaymentController::class,'redirect_to_gateway'])->name('tz.payment.gateway.paystack');
    Route::get('tzpayment-gateway/paystack-callback',[\Turtlecap\Multigateway\Http\Controllers\PaystackPaymentController::class,'callback'])->name('tz.payment.gateway.paystack.callback');
});


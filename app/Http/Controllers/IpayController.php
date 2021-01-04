<?php

namespace App\Http\Controllers;

use App\Ipay;
use Illuminate\Http\Request;
use SmoDav\iPay\Cashier;
use Session;

require "vendor/autoload.php";

class IpayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $subtotal = 0;
        $tax = 0;
        $shipping = 0;
        foreach (Session::get('cart') as $key => $cartItem) {
            $subtotal += $cartItem['price'] * $cartItem['quantity'];
            $tax += $cartItem['tax'] * $cartItem['quantity'];
            $shipping += $cartItem['shipping'] * $cartItem['quantity'];
        }

        $total = $subtotal + $tax + $shipping;
    $cashier = new Cashier();

    $transactChannels = [
        Cashier::CHANNEL_MPESA,
        Cashier::CHANNEL_AIRTEL,
    ];

    $response = $cashier
        ->usingChannels($transactChannels)
        ->usingVendorId('kulmart', '2345asqioapQE')
        ->withCallback('https://kulmart.co.ke')
        ->withCustomer('0703375006', 'kenncrutual5@gmail.com', false)
        ->transact($total, 'KulmartTest', 'TestSecret');
        return view('frontend.ipay', compact('response'));
        }

        public function callback(Request $request){
            return $request;
        }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ipay  $ipay
     * @return \Illuminate\Http\Response
     */
    public function show(Ipay $ipay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ipay  $ipay
     * @return \Illuminate\Http\Response
     */
    public function edit(Ipay $ipay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ipay  $ipay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ipay $ipay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ipay  $ipay
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ipay $ipay)
    {
        //
    }
}

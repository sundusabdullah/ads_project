<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PayPalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $negotiations = \App\Models\Negotiation::where('fixed_id',$request->fixed_id)->get();
        // dd($negotiations);
        // return view('paypal.paypal');
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
     * @param  \App\Models\Payment  $payment
     * @param  \Illuminate\Http\Request  $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment, Request $request, $id)
    {

        $fixed_q = DB::table('fixeds')->where('id',$id)->first();
        $fixed= json_decode( json_encode($fixed_q), true);
        // dd($fixed);

        return view('paypal.paypal', compact('fixed'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}

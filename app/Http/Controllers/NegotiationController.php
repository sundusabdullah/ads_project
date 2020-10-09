<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Negotiation;


class NegotiationController extends Controller
{
    //

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Negotiation  $Negotiation
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $negotiations = \App\Models\Negotiation::where('fixed_id',$request->fixed_id)->get();
        $fixed = \App\Models\Fixed::find($request->fixed_id);
        return view('order.negotiate',compact('fixed','negotiations'));
    }

}

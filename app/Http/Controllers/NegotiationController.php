<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Models\Negotiation;
use Illuminate\Support\Facades\Auth;


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
        $user_id = Auth::user()->id;
        $to = ($user_id == $fixed->sender) ? $fixed->receiver : $fixed->sender;

        return view('order.negotiate',compact('to','user_id','fixed','negotiations'));
    }
    /**
     * Store newly record
     * Send notification to the email when receiving a new message
     */
    public function store(Request $request) 
    {
        $negotiation_record = new Negotiation($request->all());
        $negotiation_record->save();

        $to = \App\Models\User::find($request->input('to'));

        try {
            Mail::send('emails.notify', ['neg'=>$negotiation_record,'to' => $to], function ($m) use ($to,$negotiation_record) {
                $m->from('hello@app.com', 'Your Application');
    
                $m->to($to->email, $to->name)->subject('تنبيه بخصوص: '.$negotiation_record->fixed->services->services_name);
            });    
        } catch(\Exception $e){
            var_dump($e);
            // Get error here
            return;
        }
        
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Fixed;
use App\Models\Negotiation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FixedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('order.fixed',compact('request'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fixed = new Fixed;

        $sender = Auth::user()->id;
        $service = \App\Models\Service::find($request->id);

        $fixed->services_id = $service->id;
        $fixed->sender = $sender;
        $fixed->receiver = $service->user_id;
        $fixed->place = $request->place;
        $fixed->date = $request->date;
        $fixed->time = $request->time;
        $fixed->notes = $request->notes;

        $fixed->save();

        $Negotiation = new Negotiation();

        $Negotiation->fixed_id = $fixed->id;
        $Negotiation->user_id = $sender;
        $Negotiation->message = 'Test..?';

        $Negotiation->save();

        return redirect()->back();
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fixed  $fixed
     * @return \Illuminate\Http\Response
     */
    public function show(Fixed $fixed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fixed  $fixed
     * @return \Illuminate\Http\Response
     */
    public function edit(Fixed $fixed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fixed  $fixed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fixed $fixed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fixed  $fixed
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fixed $fixed)
    {
        //
    }
}

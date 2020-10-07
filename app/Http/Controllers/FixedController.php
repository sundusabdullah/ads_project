<?php

namespace App\Http\Controllers;

use App\Models\Fixed;
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
    public function create()
    {
        return view('order.fixed');

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
        $receiver = "";

        $fixed->services_id = "";
        $fixed->sender = $sender;
        $fixed->receiver = "";
        $fixed->place = $request->place;
        $fixed->date = $request->date;
        $fixed->time = $request->time;
        $fixed->notes = $request->notes;

        $fixed->save();

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

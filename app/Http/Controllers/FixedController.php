<?php

namespace App\Http\Controllers;

use App\Models\Fixed;
use App\Models\Negotiation;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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
        $fixed->price = $request->price;
        $fixed->date = $request->date;
        $fixed->time = $request->time;
        $fixed->notes = $request->notes;

        $fixed->save();

        $Negotiation = new Negotiation();

        $Negotiation->fixed_id = $fixed->id;
        $Negotiation->user_id = $sender;
        $Negotiation->message = <<< END
        مرحبًا، 
        لنتفاوض حول $service->services_name .
        END;

        $Negotiation->save();

        return redirect()->route('negotiation.show',['fixed_id'=>$fixed->id]);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fixed  $fixed
     * @return \Illuminate\Http\Response
     */
    public function show(Fixed $fixed, Request $request, $id)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fixed  $fixed
     * @return \Illuminate\Http\Response
     */
    public function edit(Fixed $fixed, $id)
    {
        $fixed_q = DB::table('fixeds')->where('id',$id)->first();
        $fixed= json_decode( json_encode($fixed_q), true);
        // dd($fixed);
        return view('order.edit', compact('fixed'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fixed  $fixed
     * @return \Illuminate\Http\Response
     */
    public function update(Fixed $fixed, Request $request, $id)
    {

        $fixed_q = DB::table('fixeds')->where('id',$id)->get();
        $fixed= json_decode( json_encode($fixed_q), true);
        // dd($fixed);

        $fixed = DB::table('fixeds')->where('id',$id)->update(
            [
                'place' => $request->input('place'),
                'price' => $request->input('price'),
                'date' => $request->input('date'),
                'time' => $request->input('time'),
                'notes' => $request->input('notes'),
            ]);
       

        return back();
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

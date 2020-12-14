<?php

namespace App\Http\Controllers;

use App\Models\Statistics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StatisticsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ststic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $user= Auth::user();
        $user->statistics()->create($request->all());
        // return back();
        return view('service.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Statistics  $statistics
     * @return \Illuminate\Http\Response
     */
    public function show(Statistics $statistics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Statistics  $statistics
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Statistics $statistics, $id)
    {
        $user = \App\Models\User::find($id);

        $statistics_q = DB::table('statistics')->where('user_id',$id)->first();
        $statistic = json_decode( json_encode($statistics_q), true);
        // dd($statistic);
        return view('ststic.edit', compact('statistic', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Statistics  $statistics
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Statistics $statistics, $id)
    {
        // dd($request->all());
        $statistics = DB::table('statistics')->where('user_id',$id)->update(
            ['follow_instagram' => $request->input('follow_instagram'),
            'age_instagram' => $request->input('age_instagram'),
            'spreading_instagram' => $request->input('spreading_instagram'),
            'percentage_instagram' => $request->input('percentage_instagram'),
            'min_snapchat' => $request->input('min_snapchat'),
            'age_snapchat' => $request->input('age_snapchat'),
            'story_snapchat' => $request->input('story_snapchat'),
            'day_snapchat' => $request->input('day_snapchat'),
            'follow_snapchat' => $request->input('follow_snapchat'),
            ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Statistics  $statistics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Statistics $statistics)
    {
        //
    }
}

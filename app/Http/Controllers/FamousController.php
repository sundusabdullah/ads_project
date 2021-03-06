<?php

namespace App\Http\Controllers;

use App\Models\Famous;
use App\Models\Statistics;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;
use File;


class FamousController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        if (Auth::check())
        {
            $id = Auth::user()->id;
            $user = Auth::user();
            $famous=Famous::where('user_id',$id)->with('user')->first();
            $statistics=Statistics::where('user_id',$id)->with('user')->first();
            $services=Service::where('user_id',$id)->with('user')->get();
            $services_2=Service::where('user_id',$id)->with('user')->get();


            if(null == $famous and Auth()->user()->account_type == 'person' or 
            Auth()->user()->account_type == 'company'){
                return view('famous.message');
            }

            elseif(null == $famous){
                return view('famous.create');
            }
        }
        return view('famous.show', compact('famous','user', 'statistics', 'services', 'services_2'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('famous.create');
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
        $user->famous()->create($request->all());
        // return back();
        return view('ststic.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = \App\Models\User::find($id);
        $famous_q = DB::table('famouses')->where('user_id',$id)->first();
        $famous= json_decode(json_encode($famous_q), true);

        $services_q = DB::table('services')->where('user_id',$id)->get();
        $services= json_decode(json_encode($services_q), true);
        // dd($services);
        $services_q = DB::table('services')->where('user_id',$id)->get();
        $services_2= json_decode(json_encode($services_q), true);

        $statistics_q = DB::table('statistics')->where('user_id',$id)->first();
        $statistics= json_decode(json_encode($statistics_q), true);
        // dd($famous);
        // if(null == $famous){
        //     return view('famous.message');
        // }
        return view('famous.show', compact('famous', 'user', 'services', 'statistics', 'services_2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\famous  $famous 
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit(famous $famous, $id)
    {
        $user = \App\Models\User::find($id);
        $famous_q = DB::table('famouses')->where('user_id',$id)->first();
        $famous= json_decode( json_encode($famous_q), true);

        return view('famous.edit', compact('famous', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\famous  $famous
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, famous $famous, $id)
    {
        // dd($request->all());
        $user = Auth::user();
        if(Auth::user()->id == $id){
            if($request->hasfile('avatar')){
                $avatar = $request->file('avatar');
                $filename = time() . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename));
                $avatarPath = '/uploads/avatars/' . $filename;
                $user->avatar = $avatarPath;
                $user->save();
            }
        }
    
        $famous = DB::table('famouses')->where('user_id',$id)->update(
            ['name' => $request->input('name'),
            'brief' => $request->input('brief'),
            'email' => $request->input('email'),
            'vat' => $request->input('vat'),
            'region' => $request->input('region'),
            'interests' => $request->input('interests'),
            'nationality' => $request->input('nationality'),
            'male_follow' => $request->input('male_follow'),
            'female_follow' => $request->input('female_follow'),
            'ins_link' => $request->input('ins_link'),
            'snap_link' => $request->input('snap_link'),
            'youtube_link' => $request->input('youtube_link'),
            'twitter_link' => $request->input('twitter_link')
            ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\famous  $famous
     * @return \Illuminate\Http\Response
     */
    public function destroy(famous $famous)
    {
        //
    }
}

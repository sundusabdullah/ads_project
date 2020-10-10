<?php

namespace App\Http\Controllers;

use App\Models\Famous;
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

            if(null == $famous and Auth()->user()->account_type == 'person' or 
            Auth()->user()->account_type == 'company'){
                return view('famous.message');
            }

            elseif(null == $famous){
                return view('famous.create');
            }
        }
        return view('famous.show', compact('famous','user'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(famous $famous)
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
        $user= Auth::user();
        $user->famous()->create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\famous  $famous
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = \App\Models\User::find($id);

        $famous_q = DB::table('famouses')->where('user_id',$id)->first();
        $famous= json_decode( json_encode($famous_q), true);

        if(null == $famous){
            return view('famous.message');
        }
        return view('famous.show', compact('famous', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\famous  $famous
     * @return \Illuminate\Http\Response
     */
    public function edit(famous $famous, $id)
    {
        $user = \App\Models\User::find($id);
        $famous_q = DB::table('famouses')->where('user_id',$id)->first();
        $famous= json_decode( json_encode($famous_q), true);

        return view('famous.edit', compact('famous','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\famous  $famous
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, famous $famous, $id)
    {

        $user = Auth::user();

        $famous = DB::table('famouses')->where('user_id',$id)->update(
            ['name' => $request->input('name'),
            'brief' => $request->input('brief'),
            'instagram' => $request->input('instagram'),
            'instagram_num' => $request->input('instagram_num'),
            'snap' => $request->input('snap'),
            'snap_num' => $request->input('snap_num'),
            'twitter' => $request->input('twitter'),
            'twitter_num' => $request->input('twitter_num'),
            'region' => $request->input('region'),
            'vat' => $request->input('vat'),

            ]);

        // if($request->hasfile('avatar')){
        //     $avatar = $request->file('avatar');
        //     $filename = time() . '.' . $avatar->getClientOriginalExtension();
        //     Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename));
        //     $avatarPath = '/uploads/avatars/' . $filename;

        //     $user->avatar = $avatarPath;
        //     $user->save();
            
        //     // //Delete old image from folder 
        //     // $oldFilename = $user->avatar;
        //     // File::delete(public_path('/uploads/avatars/'.$oldFilename));
        // }
     
    
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

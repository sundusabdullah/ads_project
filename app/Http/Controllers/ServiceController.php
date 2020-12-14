<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Famous;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class ServiceController extends Controller
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
        // 
    }

    /**
     * Show the form for creating a new resource.
     *@param $service
     * @return \Illuminate\Http\Response
     */
    public function create(Service $service)
    {
        return view('service.create');
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
        $user->service()->create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = \App\Models\User::find($id);

        $services_q = DB::table('services')->where('user_id',$id)->get();
        $services = json_decode( json_encode($services_q), true);
        // dd($services);
        $services_q = DB::table('services')->where('user_id',$id)->get();
        $services_2= json_decode(json_encode($services_q), true);
        // // dd($services_2);
        return view('service.edit', compact('services', 'user', 'services_2')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  @id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        // $service = DB::table('services')->where('user_id',$id)->update(
        //     ['services_instagram_name' => $request->input('services_instagram_name'),
        //     'services_instagram_price' => $request->input('services_instagram_price')
        //     'services_snapchat_name' => $request->input('services_snapchat_name'),
        //     'services_snapchat_price' => $request->input('services_snapchat_price')
            // ]);
        // return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->back();
    }
}

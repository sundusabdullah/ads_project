<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController2 extends Controller
{
    /**
     * Update status of the specified user.
     *
     * @param  int  $id
     * @return view
     */
    public function update(Request $request, $id)
    {
        DB::table('users')->where('id',$id)->update(['status' => 1]);
        return redirect()->to('/admin');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class penggunacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $datap = User::all();
        // return view('dashboard.user', ['datap'=>$datap]);

        $datap = User::all();
        $datap = json_decode($datap);
        return view('dashboard.user',compact('datap'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    //    $user = user::findOrFail($id);
    //    return view('dashboard.formedit.formedituser',['user' => $user]);

       $user = user::findOrFail($id);
       $user = json_decode($user);
       return view('dashboard.formedit.formedituser',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user =  user::find($id);
        $user->update($request->except(['_token','submit']));
        return redirect('/dashboard/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = user::findOrFail($id);
        $user -> delete();
        return redirect('/dashboard/user')
        ->with('success','deleted successfully');
    }
}

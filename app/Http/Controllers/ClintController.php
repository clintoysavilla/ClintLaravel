<?php

namespace App\Http\Controllers;

use App\Models\Clint;
use Illuminate\Http\Request;

class ClintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Clint::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Clint::find($id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Clint::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password
        ]);
    }

    public function update(Request $request, $id)
    {
        //
        return Clint::find($id)->update([
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clint  $clint
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return Clint::find($id)->delete();
    }
}

<?php

namespace App\Http\Controllers;

use App\username;
use Illuminate\Http\Request;

class UsernameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(username::get(),200);
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
        $user = username::create($request->all());
        return response()->json($user,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\username  $username
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(username::find($id),200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\username  $username
     * @return \Illuminate\Http\Response
     */
    public function edit(username $username)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\username  $username
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, username $username)
    {
        $username->update($request->all());
        return response()->json($username, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\username  $username
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,username $username)
    {
        $username->delete();
        return response()->json(null,204);
    }
}

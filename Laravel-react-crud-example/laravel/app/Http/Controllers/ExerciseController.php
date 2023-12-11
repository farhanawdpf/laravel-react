<?php

namespace App\Http\Controllers;

use App\exercise;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(exercise::get(),200);
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
        $exe = exercise::create($request->all());
        return response()->json($exe,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\exercise  $exercise
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(exercise::find($id),200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\exercise  $exercise
     * @return \Illuminate\Http\Response
     */
    public function edit(exercise $exercise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\exercise  $exercise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, exercise $exercise)
    {
        $exercise->update($request->all());
        return response()->json($exercise,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\exercise  $exercise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, exercise $exercise)
    {
        $exercise->delete();
        return response()->json(null,204);
    }
}

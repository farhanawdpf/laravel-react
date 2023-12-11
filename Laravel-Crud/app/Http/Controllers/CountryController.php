<?php

namespace App\Http\Controllers;

use App\Models\country;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorecountryRequest;
use App\Http\Requests\UpdatecountryRequest;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = country::all();
        // dd($countries->toArray());
        return view('index',compact('countries')); 
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
     * @param  \App\Http\Requests\StorecountryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecountryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(country $country)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecountryRequest  $request
     * @param  \App\Models\country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecountryRequest $request, country $country)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(country $country)
    {
        //
    }

    public function searchProduct (Request $request) { 
        $countries = country::all()::where('name', 'like', '%'.$request->search_string.'%')
       //  ->orWhere('detais', 'like', '%'.$request->search_string.'%')
        ->orderBy('id','desc');
        if($countries->count() >=1) {
           return view ('index',compact('countries'));
           } else { 
               return response()->json([
                   'status'=>'nathing_found',
               ]);
           }
       }
}

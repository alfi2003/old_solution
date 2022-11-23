<?php

namespace App\Http\Controllers;

use App\Models\Solusi;
use Illuminate\Http\Request;

class SolusiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url = 'Solusi / Index';
        return view('solusi', compact('url'));
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
     * @param  \App\Models\Solusi  $solusi
     * @return \Illuminate\Http\Response
     */
    public function show(Solusi $solusi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Solusi  $solusi
     * @return \Illuminate\Http\Response
     */
    public function edit(Solusi $solusi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Solusi  $solusi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solusi $solusi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Solusi  $solusi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solusi $solusi)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\InisiasiProjek;
use App\Models\Witel;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class InisiasiProjekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url        = 'InisiasiProjek / Index';
        $list_witel = Witel::all();
        $data       = DB::table('inisiasi_projeks')
                         ->join('witels', 'inisiasi_projeks.id_Witel', 'witels.id')
                         ->select('inisiasi_projeks.*', 'witels.witel')->get();
        $date_now   = Carbon::now()->format('Y-m-d');
        // return dd($date_now);

        return view('inisiasi_projek.index', compact('list_witel', 'date_now', 'data', 'url'));
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
        $user = InisiasiProjek::create($request->all());
        return redirect()->route('inisiasi_projek');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InisiasiProjek  $inisiasiProjek
     * @return \Illuminate\Http\Response
     */
    public function show(InisiasiProjek $inisiasiProjek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InisiasiProjek  $inisiasiProjek
     * @return \Illuminate\Http\Response
     */
    public function edit(InisiasiProjek $inisiasiProjek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InisiasiProjek  $inisiasiProjek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InisiasiProjek $inisiasiProjek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InisiasiProjek  $inisiasiProjek
     * @return \Illuminate\Http\Response
     */
    public function destroy(InisiasiProjek $inisiasiProjek)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Pensiun;
use Illuminate\Http\Request;

class PensiunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pensiun.index',[
            'pensiuns' => Pensiun::latest()->paginate(7)
        ]);
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
     * @param  \App\Models\Pensiun  $pensiun
     * @return \Illuminate\Http\Response
     */
    public function show(Pensiun $pensiun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pensiun  $pensiun
     * @return \Illuminate\Http\Response
     */
    public function edit(Pensiun $pensiun)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pensiun  $pensiun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pensiun $pensiun)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pensiun  $pensiun
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pensiun $pensiun)
    {
        //
    }
}

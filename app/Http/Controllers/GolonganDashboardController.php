<?php

namespace App\Http\Controllers;
use App\Models\Golongan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GolonganDashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.golongan.index',[
            'golongans' => Golongan::latest()->paginate(7)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.golongan.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'golongan' => 'required',
            'ruang' => 'required',
            'besar_gaji' => 'required',
        ]);
        Golongan::create($validatedData);
        return redirect('/golongandashboard')->with('pesan','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function show(Golongan $golongan)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function edit(Golongan $golongan, $id)
    {
        return view('dashboard.golongan.edit',[
            'golongans' =>Golongan::find($id)
        ]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Golongan $golongan, $id)
    {
        $validatedData = $request->validate([
            'golongan' => 'required',
            'ruang' => 'required',
            'besar_gaji' => 'required',
        ]);

        Golongan::where('id',$id)
            ->update($validatedData);
        return redirect('/golongandashboard')->with('pesan','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Golongan $golongan, $id)
    {
        Golongan::destroy($id);
        return redirect('/golongandashboard')->with('pesan','Data berhasil dihapus');
    }
}

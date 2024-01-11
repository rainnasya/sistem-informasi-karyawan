<?php

namespace App\Http\Controllers;
use App\Models\Jabatan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JabatanDashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.jabatan.index',[
            'jabatans' => Jabatan::latest()->paginate(7)
        ]);
    }

    public function create()
    {
        return view('dashboard.jabatan.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_jab' => 'required',
            'jabatan' => 'required',
        ]);
        Jabatan::create($validatedData);
        return redirect('/jabatandashboard');
    }

    public function show(Jabatan $jabatan)
    {
        
    }

    public function edit(Jabatan $jabatan, $id)
    {
        return view('dashboard.jabatan.edit',[
            'jabatans' =>Jabatan::find($id)
        ]);  
    }

    public function update(Request $request, Jabatan $jabatan, $id)
    {
        $validatedData = $request->validate([
            'id_jab' => 'required',
            'jabatan' => 'required',
        ]);

        Jabatan::where('id',$id)
            ->update($validatedData);
        return redirect('/jabatandashboard')->with('pesan','Data berhasil diubah');
    }

    public function destroy(Jabatan $jabatan,$id)
    {
        Jabatan::destroy($id);
        return redirect('/jabatandashboard')->with('pesan','Data berhasil dihapus');
    }
}

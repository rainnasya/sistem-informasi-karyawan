<?php

namespace App\Http\Controllers;
use App\Models\Pensiun;
use Illuminate\Http\Request;

class PensiunDashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.pensiun.index',[
            'pensiuns' => Pensiun::latest()->paginate(7)
        ]);
    }

    public function create()
    {
        return view('dashboard.pensiun.create',[
            
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nip' => 'required|unique:pensiuns|size:10',
            'tahun_masuk' => 'required',
            'tahun_pensiun' => 'required',
        ]);
        Pensiun::create($validatedData);
        return redirect('/pensiundashboard')->with('pesan','Data berhasil ditambah');
    }

    public function show(Pensiun $pensiun)
    {
        
    }

    public function edit(Pensiun $pensiun, $id)
    {
        return view('dashboard.pensiun.edit',[
            'pensiuns' =>Pensiun::find($id)
        ]);  
    }

    public function update(Request $request, Pensiun $pensiun,$id)
    {
        $validatedData = $request->validate([
            'nip' => 'required|size:10',
            'tahun_masuk' => 'required',
            'tahun_pensiun' => 'required',
        ]);

        Pensiun::where('id',$id)
            ->update($validatedData);
        return redirect('/pensiundashboard')->with('pesan','Data berhasil diubah');
    }

    public function destroy(Pensiun $pensiun, $id)
    {
        Pensiun::destroy($id);
        return redirect('/pensiundashboard')->with('pesan','Data berhasil dihapus');
    }
}

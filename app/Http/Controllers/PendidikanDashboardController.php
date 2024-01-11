<?php

namespace App\Http\Controllers;
use App\Models\Karyawan;
use App\Models\Pendidikan;
use Illuminate\Http\Request;

class PendidikanDashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.pendidikan.index',[
            'pendidikans' => Pendidikan::latest()->paginate(7)
        ]);
    }

    public function create()
    {
        return view('dashboard.pendidikan.create',[
            'karyawans' => Karyawan::all()
        ]);
        
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nip' => 'required|unique:pendidikans|size:10',
            'tingkat_pdkn' => 'required',
            'jurusan' => 'required',
            'tahun' => 'required',
            'keterangan' => 'required',
        ]);
        Pendidikan::create($validatedData);
        return redirect('/pendidikandashboard')->with('pesan','Data berhasil ditambah');
    }

    public function show(Pendidikan $pendidikan)
    {

    }

    public function edit(Pendidikan $pendidikan, $id)
    {
        return view('dashboard.pendidikan.edit',[
            'karyawans' =>Karyawan::all(),
            'pendidikans' =>Pendidikan::find($id)
            
        ]);  
    }

    public function update(Request $request, Pendidikan $pendidikan, $id)
    {
        $validatedData = $request->validate([
            'nip' => 'required|size:10',
            'tingkat_pdkn' => 'required',
            'jurusan' => 'required',
            'tahun' => 'required',
            'keterangan' => 'required',
        ]);

        Pendidikan::where('id',$id)
            ->update($validatedData);
        return redirect('/pendidikandashboard')->with('pesan','Data berhasil diubah');
    }

    public function destroy(Pendidikan $pendidikan, $id)
    {
        Pendidikan::destroy($id);
        return redirect('/pendidikandashboard')->with('pesan','Data berhasil dihapus');
    }
}

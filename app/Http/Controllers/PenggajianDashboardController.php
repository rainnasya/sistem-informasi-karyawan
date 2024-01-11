<?php

namespace App\Http\Controllers;
use App\Models\Penggajian;
use App\Models\Golongan;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class PenggajianDashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.penggajian.index',[
            'penggajians' => Penggajian::latest()->paginate(7)

        ]);
    }

    public function create()
    {
        return view('dashboard.penggajian.create',[
            'golongans' => Golongan::all(),
            'karyawans' => Karyawan::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nip' => 'required|unique:penggajians|size:10',
            'golongan' => 'required',
            'gaji_pokok' => 'required',
            'tunjangan' => 'required',
            'total_gaji' => 'required',
        ]);
        Penggajian::create($validatedData);
        return redirect('/penggajiandashboard')->with('pesan','Data berhasil ditambah');

    }

    public function show(Penggajian $penggajian)
    {
        
    }

    public function edit(Penggajian $penggajian, $id)
    {
        return view('dashboard.penggajian.edit',[
            'golongans' =>Golongan::all(),
            'karyawans' =>Karyawan::all(),
            'penggajians' =>Penggajian::find($id)
        ]);  
    }

    public function update(Request $request, Penggajian $penggajian, $id)
    {
        $validatedData = $request->validate([
            'nip' => 'required|size:10',
            'golongan' => 'required',
            'gaji_pokok' => 'required',
            'tunjangan' => 'required',
            'total_gaji' => 'required',
        ]);

        Penggajian::where('id',$id)
            ->update($validatedData);
        return redirect('/penggajiandashboard')->with('pesan','Data berhasil diubah');
    }

    public function destroy(Penggajian $penggajian, $id)
    {
        Penggajian::destroy($id);
        return redirect('/penggajiandashboard')->with('pesan','Data berhasil dihapus');
    }
}

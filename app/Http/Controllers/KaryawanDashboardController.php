<?php

namespace App\Http\Controllers;
use App\Models\Golongan;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanDashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.karyawan.index',[
            'karyawans' =>  Karyawan::latest()->paginate(7)

        ]);
    }

    
    public function create()
    {
        return view('dashboard.karyawan.create',[
            'golongans' => Golongan::all()
        ]);
    }

    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nip' => 'required|unique:karyawans|size:10',
            'nama' => 'required',
            'email' =>'required',
            'jenis_kelamin' => 'required|in:P,L',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'telp' => 'required',
            'agama' => 'required',
            'status_nikah' => 'required|in:Kawin,Belum',
            'alamat' => 'required',
            'golongan' => 'required',
            
        ]);
        Karyawan::create($validatedData);
        return redirect('/karyawandashboard')->with('pesan','Data berhasil ditambah');

    }

    
    public function show(Karyawan $karyawan)
    {
        return view('dashboard.karyawan.show',[
            'karyawans'=>Karyawan::find($id)
        ]);
    }

    
    public function edit(Karyawan $karyawan, $id)
    {
        return view('dashboard.karyawan.edit',[
            'golongans' =>Golongan::all(),
            'karyawans' =>Karyawan::find($id)
        ]);  
    }

    
    public function update(Request $request, Karyawan $karyawan, $id)
    {
        $validatedData = $request->validate([
            'nip' => 'required|size:10',
            'nama' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required|in:P,L',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'telp' => 'required',
            'agama' => 'required',
            'status_nikah' => 'required|in:Kawin,Belum',
            'alamat' => 'required',
            'golongan' => 'required',


        ]);
        Karyawan::where('id',$id)
            ->update($validatedData);
        return redirect('/karyawandashboard')->with('pesan','Data berhasil diubah');
    }

    
    public function destroy(Karyawan $karyawan, $id)
    {
        Karyawan::destroy($id);
        return redirect('/karyawandashboard')->with('pesan','Data berhasil dihapus');
    }

}

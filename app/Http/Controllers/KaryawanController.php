<?php 

namespace App\Http\Controllers;
use App\Models\Golongan;
use App\Models\Karyawan;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
	public function index()
    {
        return view('karyawan.index',[
            'karyawans' =>  Karyawan::latest()->paginate(7)

        ]);
    }

    

}


	
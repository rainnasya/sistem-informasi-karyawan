<?php

namespace App\Http\Controllers;
use App\Models\Penggajian;
use App\Models\Golongan;
use Illuminate\Http\Request;

class PenggajianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('penggajian.index',[
            'penggajians' => Penggajian::latest()->paginate(7)
        ]);    
    }

    
}

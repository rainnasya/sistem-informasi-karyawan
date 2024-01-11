<?php

namespace App\Http\Controllers;
use App\Models\Golongan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GolonganController extends Controller
{
    public function index()
    {
        return view('golongan.index',[
            'golongans' => Golongan::latest()->paginate(7)
        ]);
    }

    
    
}
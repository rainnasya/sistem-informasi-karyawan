<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penggajian extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function golongan(){
        return $this-> belongsTo(Golongan::class,'golongan');
    }
    public function karyawan(){
        return $this-> belongsTo(Karyawan::class,'nip');
    }
}

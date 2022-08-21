<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kodewilayah extends Model
{
    use HasFactory;
                /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'KODE PROVINSI',
        'PROVINSI',
        'KODE KAB/KOTA',
        'KAB/KOTA',
        'KODE KEC',
        'KECAMATAN',
        'KODE KEL/DESA',
        'KELURAHAN/DESA',
        'KODE POS',
        'PROVINSI JNT',   
        'KAB/KOTA JNT',  
        'KECAMATAN JNT',   
        'KODE',   
        'KODE KOTA JNT',   
        'Note'   
    ];
}

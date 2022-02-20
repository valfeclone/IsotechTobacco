<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

            /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'logo_path',
        'deskripsi',
        'kontak',
        'alamat',
        'hari_buka',
        'jam_buka',
        'jam_tutup',
        'facebook',
        'twitter',
        'instagram'   
    ];

}

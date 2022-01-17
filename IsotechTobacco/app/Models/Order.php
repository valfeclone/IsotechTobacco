<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'totalTagihan',
        'statusBayar',
        'idTransaksiOy',
        'user_id',
        'statusTransaksi',
    ];  
}

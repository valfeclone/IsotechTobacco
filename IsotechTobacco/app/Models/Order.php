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
        'catatan',
        'ongkir',
        'idTransaksiOy',
        'user_id',
        'statusTransaksi',
        'file_resi_barang',
        'foto_bukti_pengiriman',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
}

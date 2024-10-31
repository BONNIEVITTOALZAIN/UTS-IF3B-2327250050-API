<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['nama_Hotel', 'nama_Pelanggan', 'tanggal_reservasi'];
}

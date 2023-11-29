<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangNota extends Model
{
    use HasFactory;

    protected $fillable = ['Kode_Nota', 'Kode_Barang','JumlahBarang', 'HargaSatuan','Jumlah'];
}

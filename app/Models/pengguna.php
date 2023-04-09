<?php

namespace App\Models;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PenggunaController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    protected $table = "pengguna";
    protected $primaryKet = "id"; 
    protected $fillable = [
        'nama','alamat', 'tgllhr'
    ];
}

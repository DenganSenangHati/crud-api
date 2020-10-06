<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = [
      'nim',
      'nama',
      'gender',
      'tempat_lahir',
      'tanggal_lahir',
      'alamat',
      'tahun_masuk'
    ];
}

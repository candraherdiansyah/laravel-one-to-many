<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    public $fillable = ['nama', 'nipd'];
    public $timestamps = true;

    // relasi one to many
    public function mahasiswa()
    {
        // model Dosen bisa memiliki banyak data (relasi one to many)
        // dari model Mahasiswa melalui fk 'id_dosen'
        return $this->hasMany(Mahasiswa::class, 'id_dosen');
    }
}

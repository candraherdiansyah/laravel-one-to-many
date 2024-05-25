<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    use HasFactory;

    public $fillable = ['nama', 'id_mahasiswa'];
    public $timestamps = true;

    /*
     * Relasi One-to-One
     * =================
     * Sebaliknya, buat function bernama mahasiswa(),
     * dimana model 'Wali' memiliki relasi One-to-One (belongsTo)
     * sebagai timbal balik terhadap model 'Mahasiswa' melalui 'id_mahasiswa'
     */

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
    }
}

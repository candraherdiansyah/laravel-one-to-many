<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hobi extends Model
{
    use HasFactory;

    public $fillable = ['hobi'];
    public $timestamps = true;

    // relasi many to many
    public function mahasiswa()
    {
        // model Hobi berleasi Many to Many dengan
        // model Mahasiswa melalui table pivot 'mahasiswa_hobi'
        // yang di wakili oleh 2fk id_hobi & id_mahasiswa
        return $this->belongsToMany(Mahasiswa::class,
            'mahasiswa_hobi',
            'id_hobi',
            'id_mahasiswa');
    }
}

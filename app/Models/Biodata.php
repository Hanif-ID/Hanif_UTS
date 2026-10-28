<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $table      = 'biodata';
    protected $primaryKey = 'id';
    protected $fillable   = [
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'agama',
        'no_telp',
        'email',
        'foto',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bkd extends Model
{
    protected $table = 'bkd';
    protected $fillable = [
        'nip',
        'nama',
        'jk',
        'golongan',
        'jabatan_fungsional',
        'eselon',
        'jabatan_terakhir',
        'tingkat_pendidikan',
        'jurusan_pendidikan',
        'pd',
        'instansi',
    ];
}

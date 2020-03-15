<?php

namespace App\Imports;

use App\Bkd;
use Maatwebsite\Excel\Concerns\ToModel;

class BkdImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Bkd([
            'nip' => $row[1],
            'nama' => $row[2],
            'jk' => $row[3],
            'golongan' => $row[4],
            'jabatan_fungsional' => $row[5],
            'eselon' => $row[6],
            'jabatan_terakhir' => $row[7],
            'tingkat_pendidikan' => $row[8],
            'jurusan_pendidikan' => $row[9],
            'pd' => $row[10],
            'instansi' => $row[11],
        ]);
    }
}

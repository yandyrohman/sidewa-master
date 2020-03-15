<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bpkad;
use App\Imports\BpkadImport;
use Maatwebsite\Excel\Facades\Excel;

class BpkadController extends Controller
{
    public function import(Request $request) {
        $file = $request->file('file');

        $nama_file = rand().$file->getClientOriginalName();

        $file->move('file_bpkad',$nama_file);

        Excel::import(new BpkadImport, public_path('/file_bpkad/'.$nama_file));

        echo "sukses!";
    }
}

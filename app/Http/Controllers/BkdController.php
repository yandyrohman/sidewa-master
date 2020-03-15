<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bkd;
use App\Imports\BkdImport;
use Maatwebsite\Excel\Facades\Excel;

class BkdController extends Controller
{
    public function import(Request $request) {

        $file = $request->file('file');

        $nama_file = rand().$file->getClientOriginalName();

        $file->move('file_bkd',$nama_file);

        Excel::import(new BkdImport, public_path('/file_bkd/'.$nama_file));

        echo "sukses!";

    }
}

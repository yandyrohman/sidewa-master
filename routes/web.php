<?php

use Illuminate\Support\Facades\Route;
// use DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/import', function() {
    return view('import');
});

Route::post('/import/bkd', 'BkdController@import');
Route::post('/import/bpkad', 'BpkadController@import');



function normalkan_tanggal($tanggal_ngawur) {
    $UNIX_DATE = ($tanggal_ngawur - 25569) * 86400;
    $EXCEL_DATE = 25569 + ($UNIX_DATE / 86400);
    $UNIX_DATE = ($EXCEL_DATE - 25569) * 86400;
    return gmdate("d/m/Y", $UNIX_DATE);
}

Route::get('/tes', function() {
    //
});

Route::get('/perbaiki_tanggal', function() {
    
    // $loop = DB::table('master_data')->get();
    // foreach($loop as $data) {
        DB::table('master_data')
        ->where('nip', '196009241988101001')
        ->update([
            'tgllhr' => normalkan_tanggal($data->tgllhr),
            'tmtcapeg' => normalkan_tanggal($data->tmtcapeg),
            'tmtskmt' => normalkan_tanggal($data->tmtskmt),
            'tmtkgb' => normalkan_tanggal($data->tmtkgb),
            'tmtkgbyad' => normalkan_tanggal($data->tmtkgbyad),
            'tmtberlaku' => normalkan_tanggal($data->tmtberlaku),
            'tmtstop' => normalkan_tanggal($data->tmtstop),
            'tmttabel' => normalkan_tanggal($data->tmttabel),
        ]);
    // }

});

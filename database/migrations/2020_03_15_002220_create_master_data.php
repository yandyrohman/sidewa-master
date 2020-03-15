<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE TABLE master_data AS
            SELECT
                
                bkd.nip,
                bkd.nama,
                bkd.golongan,
                bkd.jabatan_fungsional,
                bkd.eselon,
                bkd.jabatan_terakhir,
                bkd.tingkat_pendidikan,
                bkd.jurusan_pendidikan,
                bkd.pd,
                bkd.instansi,

                bpkad.tglgaji,
                bpkad.glrbelakang,
                bpkad.glrdepan,
                bpkad.kdjenkel,
                bpkad.tempatlhr,
                bpkad.tgllhr,
                bpkad.agama,
                bpkad.tmtcapeg,
                bpkad.tmtskmt,
                bpkad.mkgolt,
                bpkad.blgolt,
                bpkad.tmtkgb,
                bpkad.tmtkgbyad,
                bpkad.bup,
                bpkad.nodosir,
                bpkad.kdcabtaspen,
                bpkad.kdssbp,
                bpkad.kdskpd,
                bpkad.kdsatker,
                bpkad.alamat,
                bpkad.kddati4,
                bpkad.kddati3,
                bpkad.kddati2,
                bpkad.kddati1,
                bpkad.notelp,
                bpkad.npwp,
                bpkad.niplama,
                bpkad.kodebyr,
                bpkad.norek,
                bpkad.kdhitung,
                bpkad.tmtberlaku,
                bpkad.taperum,
                bpkad.kdjnstrans,
                bpkad.jistri,
                bpkad.janak,
                bpkad.kdstapeg,
                bpkad.tmtstop,
                bpkad.kdpangkat,
                bpkad.masker,
                bpkad.prsngapok,
                bpkad.tmttabel,
                bpkad.kdeselon,
                bpkad.kdfungsi,
                bpkad.kdguru,
                bpkad.kdstruk,
                bpkad.kdberas,
                bpkad.kdlangka,
                bpkad.kdterpencil,
                bpkad.kdtkd,
                bpkad.kdtjkhusus,
                bpkad.kdkorpri,
                bpkad.kdkoperasi,
                bpkad.kdirdhata,
                bpkad.gapok,
                bpkad.tjistri,
                bpkad.tjanak,
                bpkad.tjtpp,
                bpkad.tjeselon,
                bpkad.tjfungsi,
                bpkad.tjstruk,
                bpkad.tjguru,
                bpkad.tjlangka,
                bpkad.tjtkd,
                bpkad.tjterpencil,
                bpkad.tjkhusus,
                bpkad.tjberas,
                bpkad.tjpajak,
                bpkad.tjaskes,
                bpkad.tjumum,
                bpkad.tjkk,
                bpkad.tjkm,
                bpkad.tbulat,
                bpkad.kotor,
                bpkad.piwp,
                bpkad.paskes,
                bpkad.ppajak,
                bpkad.pbulog,
                bpkad.ptaperum,
                bpkad.psewa,
                bpkad.phutang,
                bpkad.pkorpri,
                bpkad.pirdhata,
                bpkad.pkoperasi,
                bpkad.pjkk,
                bpkad.pjkm,
                bpkad.potongan,
                bpkad.bersih,
                bpkad.catatan,
                bpkad.nu,
                bpkad.hal,
                bpkad.kdstawin,
                bpkad.nmsatker,
                bpkad.nmskpd,
                bpkad.noktp
            FROM bkd JOIN bpkad
            ON bkd.nip = bpkad.nip
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_data');
    }
}

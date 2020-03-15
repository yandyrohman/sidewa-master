<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBpkad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bpkad', function (Blueprint $table) {
            $table->id();
            $table->text('tglgaji')->nullable();
            $table->text('nip')->nullable();
            $table->text('nama')->nullable();
            $table->text('glrbelakang')->nullable();
            $table->text('glrdepan')->nullable();
            $table->text('kdjenkel')->nullable();
            $table->text('tempatlhr')->nullable();
            $table->text('tgllhr')->nullable();
            $table->text('agama')->nullable();
            $table->text('pendidikan')->nullable();
            $table->text('tmtcapeg')->nullable();
            $table->text('tmtskmt')->nullable();
            $table->text('mkgolt')->nullable();
            $table->text('blgolt')->nullable();
            $table->text('tmtkgb')->nullable();
            $table->text('tmtkgbyad')->nullable();
            $table->text('bup')->nullable();
            $table->text('nodosir')->nullable();
            $table->text('kdcabtaspen')->nullable();
            $table->text('kdssbp')->nullable();
            $table->text('kdskpd')->nullable();
            $table->text('kdsatker')->nullable();
            $table->text('alamat')->nullable();
            $table->text('kddati4')->nullable();
            $table->text('kddati3')->nullable();
            $table->text('kddati2')->nullable();
            $table->text('kddati1')->nullable();
            $table->text('notelp')->nullable();
            $table->text('npwp')->nullable();
            $table->text('niplama')->nullable();
            $table->text('kodebyr')->nullable();
            $table->text('norek')->nullable();
            $table->text('kdhitung')->nullable();
            $table->text('tmtberlaku')->nullable();
            $table->text('taperum')->nullable();
            $table->text('kdjnstrans')->nullable();
            $table->text('jistri')->nullable();
            $table->text('janak')->nullable();
            $table->text('kdstapeg')->nullable();
            $table->text('tmtstop')->nullable();
            $table->text('kdpangkat')->nullable();
            $table->text('masker')->nullable();
            $table->text('prsngapok')->nullable();
            $table->text('tmttabel')->nullable();
            $table->text('kdeselon')->nullable();
            $table->text('kdfungsi')->nullable();
            $table->text('kdguru')->nullable();
            $table->text('kdstruk')->nullable();
            $table->text('kdberas')->nullable();
            $table->text('kdlangka')->nullable();
            $table->text('kdterpencil')->nullable();
            $table->text('kdtkd')->nullable();
            $table->text('kdtjkhusus')->nullable();
            $table->text('kdkorpri')->nullable();
            $table->text('kdkoperasi')->nullable();
            $table->text('kdirdhata')->nullable();
            $table->text('gapok')->nullable();
            $table->text('tjistri')->nullable();
            $table->text('tjanak')->nullable();
            $table->text('tjtpp')->nullable();
            $table->text('tjeselon')->nullable();
            $table->text('tjfungsi')->nullable();
            $table->text('tjstruk')->nullable();
            $table->text('tjguru')->nullable();
            $table->text('tjlangka')->nullable();
            $table->text('tjtkd')->nullable();
            $table->text('tjterpencil')->nullable();
            $table->text('tjkhusus')->nullable();
            $table->text('tjberas')->nullable();
            $table->text('tjpajak')->nullable();
            $table->text('tjaskes')->nullable();
            $table->text('tjumum')->nullable();
            $table->text('tjkk')->nullable();
            $table->text('tjkm')->nullable();
            $table->text('tbulat')->nullable();
            $table->text('kotor')->nullable();
            $table->text('piwp')->nullable();
            $table->text('paskes')->nullable();
            $table->text('ppajak')->nullable();
            $table->text('pbulog')->nullable();
            $table->text('ptaperum')->nullable();
            $table->text('psewa')->nullable();
            $table->text('phutang')->nullable();
            $table->text('pkorpri')->nullable();
            $table->text('pirdhata')->nullable();
            $table->text('pkoperasi')->nullable();
            $table->text('pjkk')->nullable();
            $table->text('pjkm')->nullable();
            $table->text('potongan')->nullable();
            $table->text('bersih')->nullable();
            $table->text('catatan')->nullable();
            $table->text('nu')->nullable();
            $table->text('hal')->nullable();
            $table->text('kdstawin')->nullable();
            $table->text('nmsatker')->nullable();
            $table->text('nmskpd')->nullable();
            $table->text('noktp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bpkad');
    }
}

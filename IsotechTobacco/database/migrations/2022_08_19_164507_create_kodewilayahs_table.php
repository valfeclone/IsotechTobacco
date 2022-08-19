<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKodewilayahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kodewilayahs', function (Blueprint $table) {
            $table->id();
            $table->string("KODE_PROVINSI");
            $table->string("PROVINSI");
            $table->string("KODE_KAB_KOTA");
            $table->string("KAB_KOTA");
            $table->string("KODE_KEC");
            $table->string("KECAMATAN");
            $table->string("KODE_KEL_DESA");
            $table->string("KELURAHAN_DESA");
            $table->string("KODE_POS");
            $table->string("PROVINSI_JNT");
            $table->string("KAB_KOTA_JNT");
            $table->string("KECAMATAN_JNT");
            $table->string("KODE");
            $table->string("KODE_KOTA_JNT");
            $table->string("Note")->nullable();
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
        Schema::dropIfExists('kodewilayahs');
    }
}

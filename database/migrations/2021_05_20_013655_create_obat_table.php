<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obat', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->bigInteger('harga');
            $table->bigInteger('jml');
            $table->string('created_by');
            $table->string('edited_by');
            $table->timestamps();

            $table->string('id_periksa_poli');
            $table->unsignedBigInteger('id_obat');
            
            $table -> foreign('id_obat')->references('id')->on('ref_obat')->onDelete('cascade');
            $table -> foreign('id_periksa_poli')->references('id_periksa')->on('kunjungan_poli')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obat');
    }
}

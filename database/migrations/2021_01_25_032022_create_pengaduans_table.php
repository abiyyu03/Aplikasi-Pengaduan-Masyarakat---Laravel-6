<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaduansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tanggal_pengaduan');
            $table->unsignedBigInteger('masyarakat_nik')->references('id')->on('masyarakats');
            $table->string('judul_laporan')
            $table->text('isi_laporan');
            $table->string('foto');
            $table->enum('status',[0,'proses','selesai']);
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
        Schema::dropIfExists('pengaduans');
    }
}

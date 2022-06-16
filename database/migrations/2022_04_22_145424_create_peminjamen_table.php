<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->string('kode_transaksi');
            $table->string('peminjam');
            $table->string('nip');
            $table->integer('no_hp');
            $table->string('email');
            $table->integer('user_id');
            $table->integer('status_id');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->text('keterangan')->nullable();
            $table->string('no_memo')->nullable();
            $table->string('foto_memo')->nullable();
            $table->integer('terlambat')->nullable();
            $table->enum('kondisi', ['baik', 'rusak']);
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
        Schema::dropIfExists('peminjamen');
    }
}

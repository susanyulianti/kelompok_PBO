<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('isbn');
            $table->string('judul_buku', 100);
            $table->string('jenis_buku', 50);
            $table->string('jumlah_halaman', 50);
            $table->string('jumlah_buku', 50);
            $table->string('tahun_terbit', 50);
            $table->string('penerbit', 100);
            $table->string('pengarang', 100);
            $table->string('namephoto');
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}

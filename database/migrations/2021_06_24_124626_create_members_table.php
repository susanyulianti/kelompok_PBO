<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap', 100);
            $table->string('kelas', 50);
            $table->string('jurusan', 50);
            $table->string('tanggal_lahir', 50);
            $table->string('jenis_kelamin', 50);
            $table->string('no_telp', 50);
            $table->string('alamat', 50);
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
        Schema::dropIfExists('members');
    }
}

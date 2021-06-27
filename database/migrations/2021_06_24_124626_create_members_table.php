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
            $table->string('kd_member');
            $table->string('nm_member', 100);
            $table->string('jurusan', 50);
            $table->string('kelas', 50);
            $table->date('tanggal_lahir', 50);
            $table->string('gender', 50);
            $table->string('nohp', 50);
            $table->string('alamat', 50);
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
        Schema::dropIfExists('members');
    }
}

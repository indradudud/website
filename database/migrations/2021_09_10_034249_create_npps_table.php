<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('npps', function (Blueprint $table) {
            $table->id();
            $table->string('no_agenda');
            $table->string('no_npp');
            $table->string('slug')->unique();
            $table->string('tanggal_terima');
            $table->string('nama_pja');
            $table->string('no_nde');
            $table->string('tanggal_nde');
            $table->string('verifikator');
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
        Schema::dropIfExists('npps');
    }
}

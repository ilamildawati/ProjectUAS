<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up():void
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->year('awal_tahun');
            $table->year('akhir_tahun')->nullable();
            $table->string('bidang');
            $table->string('perusahaan');
            $table->string('alamat');
            $table->text('deskripsi_pekerjaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down():void
    {
        Schema::dropIfExists('jobs');
    }
};

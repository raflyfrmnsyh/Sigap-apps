<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id();
            $table->timestamp('tgl_pengaduan');
            $table->string('nik');
            $table->foreignId('masyarakat_id');
            $table->string('judul_laporan');
            $table->string('foto');
            $table->text('isi_laporan');
            $table->string('lokasi');
            $table->enum('status', ['prosess', 'terima', 'tolak']);
            $table->enum('publish', ['public', 'private']);
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
        Schema::dropIfExists('pengaduan');
    }
};

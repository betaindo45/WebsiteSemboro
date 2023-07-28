<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200);
            $table->string('kelamin', 50);
            $table->string('agama', 50);
            $table->string('nik', 50);
            $table->string('imagenik');
            $table->string('ttl', 200);
            $table->text('pekerjaan');
            $table->text('alamat');
            $table->string('kk',50);
            $table->string('imagekk');
            $table->text('keperluan');
            $table->text('keterangan');
            $table->boolean('status')->default(false);
            $table->text('nohp');
            $table->text('email')->nullable();
            $table->string('Cetak', 50);
            //Pindah Alamat
            $table->text('alamattujuan')->nullable();
            $table->string('desa',50)->nullable();
            $table->string('kecamatan',50)->nullable();
            $table->string('kota',50)->nullable();
            $table->text('pengikut')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};

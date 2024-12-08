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
        Schema::create('artikels', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> df0d3fe (menambahkan view portal login& register)
            $table->string('judul');
            $table->text('deskripsi');
            $table->text('konten');
            $table->string('gambar')->nullable(); // Gambar artikel
            $table->timestamps(); // Timestamps untuk created_at dan updated_at
<<<<<<< HEAD
=======
            $table->timestamps();
>>>>>>> 00bb400 (memperbarui lp)
=======
>>>>>>> df0d3fe (menambahkan view portal login& register)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikels');
    }
};

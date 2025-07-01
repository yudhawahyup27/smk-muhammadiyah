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
        Schema::create('alumnis', function (Blueprint $table) {
             $table->id();
            $table->string('name');
            $table->string('photo')->nullable();
            $table->integer('tahun_lulus')->default(null);
            $table->integer('angkatan')->default(null);
            $table->enum('status', ['bekerja','kuliah'])->default(null);
            $table->string('tempat')->default(null);
            $table->foreignId('jurusan_id')->nullable()->constrained('jurusans')->onDelete('set null');
            $table->text('caption')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnis');
    }
};

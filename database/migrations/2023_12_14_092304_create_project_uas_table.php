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
        Schema::create('project_uas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('email');
            $table->text('nomorwhatsapp');
            $table->text('pilihantempatduduk');
            $table->text('jumlahtiket');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_uas');
    }
};

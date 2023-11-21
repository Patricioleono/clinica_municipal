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
        Schema::create('sistem_user', function (Blueprint $table) {
            $table->id();
            $table->string('sis_nombreCompleto');
            $table->string('sis_usuario')->unique();
            $table->string('sis_password');
            $table->datetime('sis_tokenCreado')->nullable();
            $table->datetime('sis_tokenTermino')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sistem_user');
    }
};
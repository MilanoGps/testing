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
        Schema::create('umkm', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('id_user')->references('id')->on('users');
            $table->string('umkm');
            $table->string('description')->nullable();
            $table->string('email')->unique();
            $table->string('address')->nullable();
            $table->string('telephone_number')->nullable();
            $table->foreignId('category_id')->constrained('category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migraations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkm');
    }
};

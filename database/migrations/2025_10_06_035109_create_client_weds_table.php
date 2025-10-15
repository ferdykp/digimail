<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('client_weds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // relasi ke user
            $table->string('slug')->unique();
            $table->string('groom');
            $table->string('groomParents');
            $table->string('bride');
            $table->string('brideParents');
            $table->date('weddingDate');
            $table->string('location');
            $table->text('mapLink'); // embed Google Maps
            $table->string('pictwed');
            $table->text('story');
            $table->string('norek');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('client_weds');
    }
};

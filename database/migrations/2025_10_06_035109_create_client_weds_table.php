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
        Schema::create('client_weds', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('slug')->unique();
            $table->string('groom');
            $table->string('groomParents');
            $table->string('bride');
            $table->string('brideParents');
            $table->date('weddingDate');
            $table->string('location');
            // $table->string('name');
            // $table->decimal('latitude', 10, 7);
            // $table->decimal('longitude', 10, 7);
            $table->text('mapLink'); // embed Google Maps
            $table->string('pictwed');
            $table->string('story');
            $table->integer('norek');
            // $table->enum('confirm', ['Hadir', 'Tidak Hadir']);
            // $table->string('greetingsAud');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_weds');
    }
};

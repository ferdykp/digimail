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
        Schema::create('invitations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('clientWed_id')->constrained('client_weds')->onDelete('cascade');
            $table->string('name');
            $table->integer('noWa');
            $table->boolean('is_attending')->nullable(); // true = hadir, false = tidak hadir
            $table->string('message');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitations');
    }
};

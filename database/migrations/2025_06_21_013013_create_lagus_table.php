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
    Schema::create('lagus', function (Blueprint $table) {
        $table->id();
        $table->string('judul');
        $table->string('penyanyi');
        $table->string('file'); 
        $table->foreignId('category_id')->constrained()->onDelete('cascade'); 
        $table->string('image');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lagus');
    }
};

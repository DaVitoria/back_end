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
        Schema::create('support_materials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lesson_id')->constrained();
            $table->string('name');
            $table->enum('material_type',['pdf','annex']);// por se analisar
            $table->string('link_material');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('support_materials');
    }
};

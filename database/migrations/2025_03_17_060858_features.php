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
        Schema::create('features', function (Blueprint $table) {
            $table->id(); 
            $table->string('name')->unique(); 
            $table->text('description')->nullable();  
        });
    }
    public function down(): void
    {
        //
    }
};

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
        Schema::create('bankloans', function (Blueprint $table) {
                       $table->id();


            $table->string('bank');
            $table->integer('amount');
            $table->decimal('interest', 8, 2); 
             $table->integer('tenure_years'); 
             $table->string('notes');
         $table->integer('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bankloans');
    }
};

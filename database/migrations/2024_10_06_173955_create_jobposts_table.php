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
        Schema::create('jobposts', function (Blueprint $table) {
            $table->id();
            $table->string('title');            
            $table->text('description');        
            $table->string('working_hour');     
            $table->decimal('salary');   
            $table->string('experience');       
            $table->integer('companyid'); 
            $table->integer('categoryid'); 
            $table->date('fromdate');
            $table->date('todate');
            $table->integer('postcost');
            $table->string('payment_method');
            $table->string('payment_status')->default('pending');
            $table->timestamps();               
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobposts');
    }
};

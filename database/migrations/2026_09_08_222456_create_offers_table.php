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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('day');
            $table->date('registration_date');
            $table->integer('capacity');

            //Llave foranea program
            $table->unsignedBigInteger('program_id')->nullable();

            $table->foreign('program_id')
                ->references('id')
                ->on('programs')
                ->onDelete('set null')
                ->onUpdate('set null');

            $table->string('urlFoto')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};

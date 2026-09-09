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
        Schema::create('apprentices', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->String('email');
            $table->String('cell_number');

            //Llave foranea course
            $table->unsignedBigInteger('course_id')->nullable();

            $table->foreign('course_id')
                ->references('id')
                ->on('courses')
                ->onDelete('set null')
                ->onUpdate('set null');

            //Llave foranea computer
            $table->unsignedBigInteger('computer_id')->nullable();

            $table->foreign('computer_id')
                ->references('id')
                ->on('computers')
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
        Schema::dropIfExists('apprentices');
    }
};

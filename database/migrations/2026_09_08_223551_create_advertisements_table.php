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
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category');
            $table->date('publish_date');
            $table->string('author');
            $table->string('summary');
            $table->string('content');

            //Llave foranea training_center
            $table->unsignedBigInteger('training_center_id')->nullable();

            $table->foreign('training_center_id')
                ->references('id')
                ->on('training_centers')
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
        Schema::dropIfExists('advertisements');
    }
};

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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('type');
            $table->string('modality');
            $table->string('duration');

            //Llave foranea area
            $table->unsignedBigInteger('area_id')->nullable();

            $table->foreign('area_id')
                ->references('id')
                ->on('areas')
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
        Schema::dropIfExists('programs');
    }
};

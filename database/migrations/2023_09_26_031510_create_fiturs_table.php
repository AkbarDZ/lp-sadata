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
        Schema::create('fitur_section_2', function (Blueprint $table) {
            $table->id();

            $table->string('title_2');
            $table->string('description_2');
            $table->string('subtitle_2');
            $table->string('section2_1');
            $table->string('section2_2')->nullable();
            $table->string('section2_3')->nullable(); 
            $table->timestamps();
        });
        Schema::create('fitur_section_3', function (Blueprint $table) {
            $table->id();
            $table->string('title_3');
            $table->string('description_3');
            $table->string('subtitle_3');
            $table->string('section3_1');
            $table->string('section3_2')->nullable();
            $table->string('section3_3')->nullable();
            $table->timestamps();
        });
        Schema::create('fitur_section_4', function (Blueprint $table) {
            $table->id();
            $table->string('title_4');
            $table->string('description_4');
            $table->string('titlecard_4_1');
            $table->string('descriptioncard_4_1');
            $table->string('titlecard_4_2');
            $table->string('descriptioncard_4_2');
            $table->string('titlecard_4_3');
            $table->string('descriptioncard_4_3');

            $table->timestamps();
        });
        Schema::create('fiturs', function (Blueprint $table) {
            $table->id();
            $table->string('feature_name');
            $table->string('description');
            $table->string('feature_image_path')->nullable();
            $table->unsignedBigInteger('section2_id')->nullable();
            $table->foreign('section2_id')->references('id')->on('fitur_section_2');
            $table->unsignedBigInteger('section3_id')->nullable();
            $table->foreign('section3_id')->references('id')->on('fitur_section_3');
            $table->unsignedBigInteger('section4_id')->nullable();
            $table->foreign('section4_id')->references('id')->on('fitur_section_4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

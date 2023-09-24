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
        Schema::create('beranda_mains', function (Blueprint $table) {
            $table->id();
            $table->string('top_page_text' , 255)->nullable();
            $table->string('top_page_subtext' , 255)->nullable();
            $table->string('top_page_desc' , 255)->nullable();
            $table->string('apps_desc' , 255)->nullable();
            $table->string('summary_desc' , 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beranda_mains');
    }
};

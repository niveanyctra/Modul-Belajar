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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            // $table->foreign('mentor_id')->references('id')->on('mentors')->onDelete('cascade');
            $table->string('author',255);
            $table->string('title', 255);
            $table->enum('category',['html','css','php','js','mysql'])->default('html');
            $table->string('content', 255);
            $table->text('id_yt');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};

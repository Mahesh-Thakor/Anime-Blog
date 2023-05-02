<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable('posts') && Schema::hasTable('users')) {
            Schema::create('posts', function (Blueprint $table) {
                $table->id();
                $table->text('title');
                $table->text('image', 500)->nullable();
                $table->text('body');
                $table->unsignedBigInteger('user_id');
                $table->timestamps();
            });
            Schema::table('posts', function($table) {
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};

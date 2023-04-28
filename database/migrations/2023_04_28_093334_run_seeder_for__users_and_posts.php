<?php

use Database\Seeders\PostTableSeeder;
use Database\Seeders\UserTableSeeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {        
        if (Schema::hasTable('posts') && Schema::hasTable('users')) {
            Artisan::call('db:seed --class=UserTableSeeder');
            Artisan::call('db:seed --class=PostTableSeeder');
            Artisan::call('db:seed --class=CommentTableSeeder');
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

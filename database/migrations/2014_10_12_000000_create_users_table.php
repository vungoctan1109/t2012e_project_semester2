<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('fullName');
            $table->string('phone');
            $table->string('address');
            $table->string('avatar')->default('https://res.cloudinary.com/tanvnth2012002/image/upload/v1638316998/default-avatar-profile-icon-vector-social-media-user-portrait-176256935_mlifmc.jpg');
            $table->string('description')->nullable();
            $table->integer('role');
            $table->integer('status');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

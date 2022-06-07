<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id')-> autoIncrement();
            $table->string('name', 255);
            // $table->string('fname', 30);
            // $table->string('mname', 30);
            // $table->string('lname', 30);
            // $table->string('regno', 255)->unique();
            // $table->char('gender', 2);
            // $table->string('cor', 20);
            // $table->string('address', 255);
            // $table->string('postaladdress', 15);
            // $table->string('cellpone', 15);
            // $table->string('nationality', 20);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')-> nullable();
            $table->string('password', 255)->unique();
            // $table->string('');

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
};

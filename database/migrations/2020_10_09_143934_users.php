<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('user', 50)->primary()->unique();
            $table->string('name');
            $table->string('surname');
            $table->enum('role', ['Buyer', 'Business', 'Administrator', 'Potential', 'Employee'])->default('Buyer');
            $table->string('password');
            $table->string('cellphone', 12)->unique();
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('tipo');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(
            array(
                'name' => 'RMarques',
                'email' => 'rafael.g.marques@protonmail.com',
                'password' => Hash::make('backstab'),
                'tipo' => 'admin'
            )
        );

        DB::table('users')->insert(
            array(
                'name' => 'MGoncalves',
                'email' => 'miguelgoncalves0212@gmail.com',
                'password' => Hash::make('jerofanes.646'),
                'tipo' => 'admin'
            )
        );
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}

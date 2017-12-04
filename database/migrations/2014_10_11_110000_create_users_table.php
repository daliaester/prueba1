<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->char('rut',10);
            $table->string('name',35);
            $table->string('apellido',35);
            $table->string('ocupacion',35);
            $table->string('email')->unique();
            $table->char('celular',11);
            $table->char('ciudad',35);
            $table->date('fnacimiento');
            $table->string('password', 60);
            $table->binary('imagen');
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
        Schema::drop('users');
    }
}

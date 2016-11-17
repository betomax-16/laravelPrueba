<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 90);
            $table->string('apellidoPaterno', 60);
            $table->string('apellidoMaterno', 60);
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role', ['ROLE_ADMIN', 'ROLE_USER'])->default('ROLE_USER')	;
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
        Schema::drop('usuarios');
    }
}

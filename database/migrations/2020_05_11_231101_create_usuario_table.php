<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        DB::statement("
        CREATE TABLE usuarios(
            id int(255) auto_increment not null,
            nombre varchar(255),
            email varchar(255),
            password varchar(255),
            PRIMARY KEY(id)
        );
        ");


       /* Migraciones con laravel con el comando php artisan make:migration create_usuario_table --table=usuarios
       Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',255);
            $table->string('email',255);
            $table->string('password',255);
            $table->integer('edad');
            $table->integer('sueldo');
            $table->timestamps();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            Schema::drop('usuarios');
        });
    }
}

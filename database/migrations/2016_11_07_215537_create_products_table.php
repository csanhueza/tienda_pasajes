<<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Realizar cambios, crea la tabla de productos
        Schema::create('products', function(Blueprint $tabla){
            $tabla->increments("id");

            $tabla->integer('user_id')->unsigned()->index();
            $tabla->string('title');
            $tabla->text('description');
            $tabla->decimal('pricing',9,3); //Pesos
            $tabla->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Revierte los cambios creados(eliminar producto)
        Schema::drop('products');
    }
}

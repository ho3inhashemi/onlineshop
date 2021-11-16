<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmazingProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amazing_products', function (Blueprint $table) {
            $table->id();
            $table->string('En_name');
            $table->string('slug');
            $table->text("explanation");
            $table->integer('price');
            $table->integer('count');
            $table->string('img');
            $table->json('images');
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
        Schema::dropIfExists('amazing_products');
    }
}

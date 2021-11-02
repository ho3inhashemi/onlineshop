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
            $table->text('Fa_name');
            $table->text('En_name');
            $table->text('slug')->unique();
            $table->integer('price');
            $table->text('explanation');
            $table->string('status');
            $table->string('img');
            $table->integer('views');
            $table->integer('discount');
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

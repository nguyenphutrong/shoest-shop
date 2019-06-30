<?php

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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');       
            $table->bigInteger('category_id')->unsigned();    
            $table->string('name');
            $table->string('slug');
            $table->string('pic')->nullable();
            $table->text('spec')->nullable();
            $table->text('short_desc')->nullable();
            $table->text('desc')->nullable();
            $table->string('price');    
            $table->timestamps();
            
            $table->foreign('category_id')
                ->references('id')->on('categories')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

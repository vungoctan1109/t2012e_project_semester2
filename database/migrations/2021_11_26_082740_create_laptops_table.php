<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaptopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptops', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('categoryID');
            $table->foreign('categoryID')->references('id')->on('categories');
            $table->unsignedBigInteger('brandID');
            $table->foreign('brandID')->references('id')->on('brands');
            $table->string('name');
            $table->integer('quantity');
            $table->integer('status');
            $table->double('saleOff');
            $table->double('price');
            $table->text('thumbnail');
            $table->text('description');
            $table->text('detail');
            $table->string('color');
            $table->integer('ram');
            $table->string('cpu');
            $table->integer('ssd');
            $table->integer('hdd');
            $table->double('screenSize');
            $table->integer('pin');
            $table->string('graphicCard');
            $table->string('demand');
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
        Schema::dropIfExists('laptops');
    }
}

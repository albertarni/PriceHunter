<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Image;
use App\Models\Product;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Image::T, function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('url');
            $table->timestamps();
        });

        Schema::create(Image::TP, function (Blueprint $table) {
            $table->integer('product_id')->unsigned();
            $table->integer('image_id')->unsigned();

            $table->foreign('product_id')->references('id')->on(Product::T);
            $table->foreign('image_id')->references('id')->on(Image::T);

            $table->primary(['product_id', 'image_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop(Image::TP);
        Schema::drop(Image::T);
    }
}

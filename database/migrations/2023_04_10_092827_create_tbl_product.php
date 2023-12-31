<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_product', function (Blueprint $table) {
            $table->Increments('product_id');
            $table->string('product_ten');
            $table->integer('category_id');
            //$table->integer('brand_id');
            $table->text('product_mota');
            //$table->text('product_content');
            $table->string('product_giaban');
            $table->string('product_anh');
            $table->integer('product_trangthai');
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
        Schema::dropIfExists('tbl_product');
    }
};

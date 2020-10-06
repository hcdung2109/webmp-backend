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
            $table->string('name',255)->unique();
            $table->string('slug',255);
            $table->integer('vendor_id');
            $table->integer('brand_id');
            $table->integer('category_id');
            $table->string('made_in');
            $table->date('expiry_date');
            $table->date('manufacture_date');
            $table->integer('is_hot');
            $table->integer('is_active');
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
        Schema::dropIfExists('products');
    }
}

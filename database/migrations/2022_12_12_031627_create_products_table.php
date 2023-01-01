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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('sku_code')->nullable();
            $table->string('mf_code')->nullable();
            $table->string('product_code')->nullable();
            $table->string('tags')->nullable();
            $table->string('size')->nullable();
            $table->string('color')->nullable();
            $table->longText('short_desc')->nullable();
            $table->longText('overview')->nullable();
            $table->longText('specification')->nullable();
            $table->longText('accessories')->nullable();
            $table->longText('warranty')->nullable();
            $table->string('thumbnail');
            $table->integer('stock')->default(1);
            //$table->enum('condition',['default','new','hot'])->default('default');
            $table->enum('status',['active','inactive'])->default('active');
            $table->float('price',8,2)->nullabale();
            $table->float('discount',8,2)->nullabale();
            $table->string('deal')->nullable();
            $table->string('industry')->nullable();
            $table->string('solution')->nullable();
            $table->enum('refurbished',['0','1'])->default('0')->nullable();
            $table->string('product_type');
            $table->unsignedBigInteger('cat_id')->nullable();
            $table->unsignedBigInteger('sub_cat_id')->nullable();
            $table->unsignedBigInteger('sub_sub_cat_id')->nullable();
            $table->unsignedBigInteger('sub_sub_sub_cat_id')->nullable();
            $table->unsignedBigInteger('brand_id')->nullable();

            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('SET NULL');
            $table->foreign('cat_id')->references('id')->on('categories')->onDelete('SET NULL');
            $table->foreign('sub_cat_id')->references('id')->on('sub_categories')->onDelete('SET NULL');
            $table->foreign('sub_sub_cat_id')->references('id')->on('sub_sub_categories')->onDelete('SET NULL');
            $table->foreign('sub_sub_sub_cat_id')->references('id')->on('sub_sub_sub_categories')->onDelete('SET NULL');
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
};

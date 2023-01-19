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
        Schema::create('rfq_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rfq_id');
            $table->string('product_name')->nullable();
            $table->bigInteger('qty')->nullable();
            $table->float('unit_price')->nullable();
            $table->float('discount')->nullable();
            $table->float('discount_price')->nullable();
            $table->float('total_price')->nullable();
            $table->float('sub_total')->nullable();
            $table->float('tax')->nullable();
            $table->float('tax_price')->nullable();
            $table->float('vat')->nullable();
            $table->float('vat_price')->nullable();
            $table->float('grand_total')->nullable();
            $table->text('product_des')->nullable();
            $table->foreign('rfq_id')->references('id')->on('rfqs')->onUpdate('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('rfq_products');
    }
};

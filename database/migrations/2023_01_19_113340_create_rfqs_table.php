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
        Schema::create('rfqs', function (Blueprint $table) {
            $table->id();
            $table->string('rfq_code')->unique();
            $table->unsignedBigInteger('sales_man_id_L1')->nullable();
            $table->unsignedBigInteger('sales_man_id_T1')->nullable();
            $table->unsignedBigInteger('sales_man_id_T2')->nullable();
            $table->unsignedBigInteger('client_id')->nullable();
            $table->unsignedBigInteger('partner_id')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->unsignedBigInteger('solution_id')->nullable();
            $table->enum('client_type', ['client', 'partner'])->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('company_name')->nullable();
            $table->string('designation')->nullable();
            $table->text('address')->nullable();
            $table->date('create_date')->nullable();
            $table->date('close_date')->nullable();
            $table->string('pq_code')->nullable();
            $table->string('pqr_code_one')->nullable();
            $table->string('pqr_code_two')->nullable();
            $table->integer('qty')->nullable();
            $table->string('image')->nullable();
            $table->text('message')->nullable();
            $table->enum('call', ['0', '1'])->default('0')->nullable();
            $table->string('status')->nullable();
            $table->string('validity')->nullable();
            $table->string('payment')->nullable();
            $table->string('payment_mode')->nullable();
            $table->string('delivery')->nullable();
            $table->string('delivery_location')->nullable();
            $table->string('product_order')->nullable();
            $table->string('installation_support')->nullable();
            $table->string('pmt_condition')->nullable();
            $table->string('terms_nine')->nullable();
            $table->string('terms_ten')->nullable();
            $table->string('terms_eleven')->nullable();
            $table->float('tax')->nullable();
            $table->float('vat')->nullable();
            $table->float('total_price')->nullable();
            $table->text('price_text')->nullable();

            $table->foreign('sales_man_id_L1')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sales_man_id_T1')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sales_man_id_T2')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('solution_id')->references('id')->on('solution_details')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('partner_id')->references('id')->on('partners')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('rfqs');
    }
};

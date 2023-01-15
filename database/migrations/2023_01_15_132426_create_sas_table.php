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
        Schema::create('sas', function (Blueprint $table) {
                    $table->id();
                    $table->string('ref_code')->nullable();
                    $table->date('create')->nullable();
                    $table->string('item_name')->nullable();
                    $table->float('cog_price')->nullable();
                    $table->float('sales_price')->nullable();
                    $table->float('bank_charge')->nullable();
                    $table->float('customs')->nullable();
                    $table->float('tax')->nullable();
                    $table->float('utility_cost')->nullable();
                    $table->float('shiping_cost')->nullable();
                    $table->float('sales_comission')->nullable();
                    $table->float('liability')->nullable();
                    $table->float('regular_discounts')->nullable();
                    $table->float('rebates')->nullable();
                    $table->float('capital_share')->nullable();
                    $table->float('management_cost')->nullable();
                    $table->float('net_profit')->nullable();
                    $table->float('gross_profit')->nullable();
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
        Schema::dropIfExists('sas');
    }
};
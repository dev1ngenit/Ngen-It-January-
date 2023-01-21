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
        Schema::create('sales_year_targets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->year('fiscal_year')->nullable();
            $table->float('year_target')->nullable();
            $table->float('quarter_one_target')->nullable();
            $table->float('quarter_two_target')->nullable();
            $table->float('quarter_three_target')->nullable();
            $table->float('quarter_four_target')->nullable();
            $table->enum('year_started',['january','june'])->nullable();

            $table->float('january_target')->nullable();
            $table->float('february_target')->nullable();
            $table->float('march_target')->nullable();
            $table->float('april_target')->nullable();
            $table->float('may_target')->nullable();
            $table->float('june_target')->nullable();
            $table->float('july_target')->nullable();
            $table->float('august_target')->nullable();
            $table->float('september_target')->nullable();
            $table->float('october_target')->nullable();
            $table->float('november_target')->nullable();
            $table->float('december_target')->nullable();
            $table->foreign('country_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('sales_year_targets');
    }
};

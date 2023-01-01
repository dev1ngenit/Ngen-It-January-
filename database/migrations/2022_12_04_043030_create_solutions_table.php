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
        Schema::create('solutions', function (Blueprint $table) {
            $table->id();
            // $table->string('name');
            // $table->text('header');
            // $table->string('image');
            // $table->mediumText('row2_col1')->nullable();
            // $table->mediumText('row2_col2')->nullable();
            // $table->longText('row3')->nullable();
            // $table->mediumText('row4_col1')->nullable();
            // $table->mediumText('row4_col1_btn_name')->nullable();
            // $table->mediumText('row4_col1_link')->nullable();
            // $table->string('row4_col2_image')->nullable();
            // $table->string('row4_col2_name')->nullable();
            // $table->string('row4_col2_link')->nullable();
            // $table->string('row4_col2_image1')->nullable();
            // $table->string('row4_col2_name1')->nullable();
            // $table->string('row4_col2_link1')->nullable();
            // $table->string('row4_col2_image2')->nullable();
            // $table->string('row4_col2_name2')->nullable();
            // $table->string('row4_col2_link2')->nullable();
            // $table->string('row4_col2_image3')->nullable();
            // $table->string('row4_col2_name3')->nullable();
            // $table->string('row4_col2_link3')->nullable();
            // $table->string('row4_col2_image4')->nullable();
            // $table->string('row4_col2_name4')->nullable();
            // $table->string('row4_col2_link4')->nullable();
            // $table->string('row4_col2_image5')->nullable();
            // $table->string('row4_col2_name5')->nullable();
            // $table->string('row4_col2_link5')->nullable();
            // $table->longText('row5')->nullable();
            // $table->string('row5_link')->nullable();
            // $table->string('row5_btn_name')->nullable();
            // $table->string('image');
            // $table->longText('description')->nullable();
            // $table->foreign('industry_id')->references('id')->on('industries')->onDelete('cascade');
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
        Schema::dropIfExists('solutions');
    }
};

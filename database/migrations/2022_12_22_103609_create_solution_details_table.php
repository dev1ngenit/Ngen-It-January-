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
        Schema::create('solution_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('row_one_id');
            $table->unsignedBigInteger('row_four_id');
            $table->unsignedBigInteger('solution_card_one_id');
            $table->unsignedBigInteger('solution_card_two_id');
            $table->unsignedBigInteger('solution_card_three_id');
            $table->unsignedBigInteger('solution_card_four_id');
            $table->unsignedBigInteger('solution_card_five_id');
            $table->unsignedBigInteger('solution_card_six_id');
            $table->unsignedBigInteger('solution_card_seven_id');
            $table->unsignedBigInteger('solution_card_eight_id');
            $table->string('industry_id')->comment('multi_id');
            $table->string('name');
            $table->text('header');
            $table->string('banner_image')->comment('1800*625');
            $table->string('row_two_title');
            $table->text('row_two_header');
            $table->string('row_three_title');
            $table->text('row_three_header');
            $table->string('row_five_title');
            $table->text('row_five_header');
            $table->foreign('row_one_id')->references('id')->on('rows')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('solution_card_one_id')->references('id')->on('solution_cards')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('solution_card_two_id')->references('id')->on('solution_cards')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('solution_card_three_id')->references('id')->on('solution_cards')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('solution_card_four_id')->references('id')->on('solution_cards')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('solution_card_five_id')->references('id')->on('solution_cards')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('solution_card_six_id')->references('id')->on('solution_cards')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('solution_card_seven_id')->references('id')->on('solution_cards')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('solution_card_eight_id')->references('id')->on('solution_cards')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('solution_details');
    }
};

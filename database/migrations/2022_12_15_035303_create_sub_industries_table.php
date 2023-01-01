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
        Schema::create('sub_industries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('industry_id');
            $table->string('title');
            $table->string('logo');
            $table->text('short_des')->nullable();
            $table->foreign('industry_id')->references('id')->on('industries')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('sub_industries');
    }
};

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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('badge');
            $table->string('title');
            $table->text('header')->nullable();
            $table->string('created_by')->nullable();
            $table->string('tags');
            $table->string('image')->nullable();
            $table->longText('short_des')->comment('summernote');
            $table->longText('long_des')->comment('summernote');
            $table->text('footer')->nullable()->comment('summernote');
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
        Schema::dropIfExists('blogs');
    }
};

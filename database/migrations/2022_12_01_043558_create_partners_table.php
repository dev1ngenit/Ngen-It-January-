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
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('company_name')->nullable();
            $table->string('company_site_name')->nullable();
            $table->text('company_address')->nullable();
            $table->string('company_email_address')->nullable();
            $table->string('primary_email_address')->unique();
            $table->string('phone_number')->nullable();
            $table->string('company_number')->nullable();
            $table->string('company_trade_license')->nullable();
            $table->string('company_tin_number')->nullable();
            $table->string('company_vat')->nullable();
            $table->string('business_type')->nullable();
            $table->string('business_since')->nullable()->comment('business_since');
            $table->string('logo')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('postal')->nullable();
            $table->string('last_seen')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('inactive')->nullable();
            // $table->tinyInteger('is_partner')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('partners');
    }
};

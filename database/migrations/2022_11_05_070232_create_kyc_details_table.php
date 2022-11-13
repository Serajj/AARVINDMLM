<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKycDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kyc_details', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('bank_name');
            $table->string('account_no');
            $table->string('ifsc_code');
            $table->string('branch');
            $table->string('photo_id_no');
            $table->string('photo_id_mage');
            $table->string('passbook_image');
            $table->string('upi')->default('');
            $table->string('extra_one')->nallable();
            $table->string('extra_two')->nallable();
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
        Schema::dropIfExists('kyc_details');
    }
}

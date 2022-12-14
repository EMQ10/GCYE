<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();

            $table->string('company')->nullable();
            $table->string('reg_number')->nullable();
            $table->string('ownership_type')->nullable();
            $table->string('telephone')->nullable();
            $table->string('business_email')->nullable();
            $table->string('website')->nullable();
            $table->string('address')->nullable();
            $table->string('activity')->nullable();
            $table->string('logo')->nullable();
            $table->string('business_doc')->nullable();
            $table->string('business_doc_path')->nullable();

            $table->string('member_mid')->nullable();
            $table->foreign('member_mid')->references('mid')->on('members');
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
        Schema::dropIfExists('businesses');
    }
}

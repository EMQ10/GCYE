<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('mid');
            $table->string('image');
            $table->string('name');
            $table->string('gender');
            $table->string('dob');
            $table->string('email');
            $table->string('phone');
            $table->string('region');
            $table->string('membership_type')->nullable();

            $table->string('reg_fee');
            $table->string('dues_fee');

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
        Schema::dropIfExists('members');
    }
}

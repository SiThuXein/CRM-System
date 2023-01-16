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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string("full_name");
            $table->string("father_name");
            $table->string("nrc");
            $table->string("type");
            $table->string("phone");
            $table->string("date_of_birth");
            $table->string("education");
            $table->string("gender");
            $table->string("occupation");
            $table->string("address");
            $table->string("status");
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
        Schema::dropIfExists('customers');
    }
};

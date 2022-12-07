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
        Schema::create('lib64', function (Blueprint $table) {
            $table->id();
            $table->string('lib64ARMV7aName');
            $table->string('lib64ARMV8aName');
            $table->string('lib64ARMV7aUrl');
            $table->string('lib64ARMV8aUrl');
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
        Schema::dropIfExists('lib64');
    }
};

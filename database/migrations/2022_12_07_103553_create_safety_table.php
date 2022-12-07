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
        Schema::create('safety', function (Blueprint $table) {
            $table->id();
            $table->boolean('is32Bit')->comment('0=Safe 1=Unsafe')->default('0')->nullable();
            $table->boolean('is64Bit')->comment('0=Safe 1=Unsafe')->default('0')->nullable();
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
        Schema::dropIfExists('safety');
    }
};

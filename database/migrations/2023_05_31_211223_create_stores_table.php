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
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->integer('admin_id');
            $table->string('name');
            $table->integer('prefecture');
            $table->integer('city');
            $table->string('address1');
            $table->string('address2')->nullable();
            $table->string('tel');
            $table->integer('price');
            $table->integer('start_time');
            $table->integer('end_time');
            $table->integer('rest_start_time')->nullable();
            $table->integer('rest_end_time')->nullable();
            $table->text('menu');
            $table->string('url')->nullable();
            $table->text('introduction')->nullable();
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
        Schema::dropIfExists('stores');
    }
};

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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('company', 50);
            $table->string('departure_station', 40);
            $table->string('arrival_station', 40);
            $table->string('code');
            $table->tinyInteger('total_couch')->nullable();
            $table->boolean('on_time')->default(true);
            $table->boolean('canceled')->nullable();
            $table->date('departure_date');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};

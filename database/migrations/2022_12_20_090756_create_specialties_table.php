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
        Schema::create('specialization', function (Blueprint $table) {
            $table->id();

            $table->string('direction')->default('empty');
            $table->string('fullTime')->nullable();
            $table->string('correspondence')->nullable();
            $table->string('entranceExam')->nullable();
            $table->string('description')->default("")->nullable();
            $table->float('budget')->nullable();

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
        Schema::dropIfExists('specialization');
    }
};

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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();

            $table->string('FIO');
            $table->string('post');
            $table->string('phone');
            $table->string('email');
            $table->string('workTime');
            $table->string('education');
            $table->string('experience');
            $table->string('description');
            //$table->binary('avatar')->nullable();

            $table->timestamps();
        });

        DB::statement("ALTER TABLE contacts ADD avatar LONGBLOB AFTER description");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
};

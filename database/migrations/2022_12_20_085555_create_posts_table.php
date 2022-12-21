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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->string('title')->default('empty');
            $table->unsignedTinyInteger('idObject')->default(1);
            $table->unsignedTinyInteger('idGroup')->default(1);
            $table->unsignedTinyInteger('idOffice')->default(1);
            $table->string('description')->default(" ")->nullable();
            $table->date('date')->default('10.10.2020');

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
        Schema::dropIfExists('posts');
    }
};

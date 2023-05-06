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
        Schema::create('time_tables', function (Blueprint $table) {
            $table->id();

            $table->string('description')->nullable();

            $table->unsignedBigInteger('subject_id')->nullable();
            $table->index('subject_id', 'time_table_subject_idx');
            $table->foreign('subject_id', 'time_table_subject_fk')->on('subjects')->references('id');

            $table->unsignedBigInteger('group_id')->nullable();
            $table->index('group_id', 'time_table_group_idx');
            $table->foreign('group_id', 'time_table_group_fk')->on('groups')->references('id');

            $table->unsignedBigInteger('room_id')->nullable();
            $table->index('room_id', 'time_table_room_idx');
            $table->foreign('room_id', 'time_table_room_fk')->on('rooms')->references('id');

            $table->unsignedBigInteger('teacher_id')->nullable();
            $table->index('teacher_id', 'time_table_teacher_idx');
            $table->foreign('teacher_id', 'time_table_teacher_fk')->on('teachers')->references('id');

            $table->unsignedBigInteger('date_time_table_id')->nullable();
            $table->index('date_time_table_id', 'time_table_date_time_table_idx');
            $table->foreign('date_time_table_id', 'time_table_date_time_table_fk')->on('date_time_tables')->references('id');

            $table->unsignedBigInteger('lesson_id')->nullable();
            $table->index('lesson_id', 'lesson_time_table_idx');
            $table->foreign('lesson_id', 'lesson_time_table_fk')->on('lessons')->references('id');

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
        Schema::dropIfExists('time_tables');
    }
};

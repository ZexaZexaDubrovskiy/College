<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Group;
use App\Models\Lesson;
use App\Models\DateTimeTable;
use App\Models\Room;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\TimeTable;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


       $groups = Group::factory(5)->create();
        $lessons = Lesson::factory(100)->create();
        $dateTimeTables = DateTimeTable::factory(100)->create();
        $rooms = Room::factory(50)->create();
        $subjects = Subject::factory(50)->create();
        $teachers = Teacher::factory(10)->create();

        $users = User::factory(3)->create();

        foreach($subjects as $subject){
            $groupIds = $groups->random(1)->pluck('id');
            $lessonIds = $lessons->random(1)->pluck('id');
            $dateTimeTableIds = $dateTimeTables->random(1)->pluck('id');
            $roomIds = $rooms->random(1)->pluck('id');
            $teacherIds = $teachers->random(1)->pluck('id');
            $subjectIds = $subjects->random(1)->pluck('id');

            TimeTable::factory(1)->create([
             'description' => null,
             'subject_id' => $subjectIds[0],
             'group_id' => $groupIds[0],
             'room_id' => $roomIds[0],
             'teacher_id' => $teacherIds[0],
             'date_time_table_id' => $dateTimeTableIds[0],
             'lesson_id' => $lessonIds[0],
         ]);
        }

    }
}

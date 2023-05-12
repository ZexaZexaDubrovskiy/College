<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Contact;
use App\Models\Group;
use App\Models\HtmlTable;
use App\Models\Lesson;
use App\Models\DateTimeTable;
use App\Models\Photo;
use App\Models\Post;
use App\Models\PostPhoto;
use App\Models\Room;
use App\Models\Specialization;
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
        $spec = Specialization::factory(20)->create();
        $cont = Contact::factory(20)->create();

        DateTimeTable::factory(1)->create([
            'startDate' => '2023.05.12'
        ]);
        DateTimeTable::factory(1)->create([
            'startDate' => '2023.05.13'
        ]);
        DateTimeTable::factory(1)->create([
            'startDate' => '2023.05.14'
        ]);
        DateTimeTable::factory(1)->create([
            'startDate' => '2023.05.15'
        ]);
        Lesson::factory(1)->create([
            'startTime' => '08:30:00'
        ]);
        Lesson::factory(1)->create([
            'startTime' => '10:30:00'
        ]);
        Lesson::factory(1)->create([
            'startTime' => '12:20:00'
        ]);
        Lesson::factory(1)->create([
            'startTime' => '14:05:00'
        ]);
        Lesson::factory(1)->create([
            'startTime' => '16:00:00'
        ]);
        Lesson::factory(1)->create([
            'startTime' => '17:45:00'
        ]);
        Lesson::factory(1)->create([
            'startTime' => '19:15:00'
        ]);


       $photos = Photo::factory(20)->create();
       $posts = Post::factory(20)->create();
       $postPhotos = PostPhoto::factory(50)->create();

       $groups = Group::factory(5)->create();
        $rooms = Room::factory(50)->create();
        $subjects = Subject::factory(100)->create();
        $teachers = Teacher::factory(10)->create();

        $users = User::factory(3)->create();

        foreach($subjects as $subject){
            $groupIds = $groups->random(1)->pluck('id');
            $roomIds = $rooms->random(1)->pluck('id');
            $teacherIds = $teachers->random(1)->pluck('id');
            $subjectIds = $subjects->random(1)->pluck('id');

            TimeTable::factory(1)->create([
             'description' => null,
             'subject_id' => $subjectIds[0],
             'group_id' => $groupIds[0],
             'room_id' => $roomIds[0],
             'teacher_id' => $teacherIds[0],
             'date_time_table_id' => random_int(1, 4),
             'lesson_id' => random_int(1, 7),
         ]);
        }

        HtmlTable::factory(1)->create([
            'namePage' => 'hostel',
            'htmlData' => null,
        ]);

        HtmlTable::factory(1)->create([
            'namePage' => 'requisite',
            'htmlData' => null,
        ]);

    }
}

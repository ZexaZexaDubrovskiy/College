<?php

namespace App\Services\ProfessionalTrainingCourse;


use Illuminate\Support\Facades\DB;

class Service {

    public function update($id, $data){
        $professionalTrainingCourseText = DB::table('html_table')->where('id', $id)->first();
        $professionalTrainingCourseText->htmlData = $data['myTextarea'];
        DB::table('html_table')
            ->where('id', $id)
            ->update(['htmlData' => $data['myTextarea']]);
    }
}

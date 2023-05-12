<?php

namespace App\Services\Hostel;


use Illuminate\Support\Facades\DB;

class Service {

    public function update($id, $data){
        $hostelText = DB::table('html_table')->where('id', $id)->first();
        $hostelText->htmlData = $data['myTextarea'];

        DB::table('html_table')
            ->where('id', $id)
            ->update(['htmlData' => $data['myTextarea']]);
    }
}

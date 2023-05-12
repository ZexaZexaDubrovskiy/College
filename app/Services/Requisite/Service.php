<?php

namespace App\Services\Requisite;


use Illuminate\Support\Facades\DB;

class Service {

    public function update($id, $data){
        $requisiteText = DB::table('html_table')->where('id', $id)->first();
        $requisiteText->htmlData = $data['myTextarea'];

        DB::table('html_table')
            ->where('id', $id)
            ->update(['htmlData' => $data['myTextarea']]);
    }
}

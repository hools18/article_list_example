<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class MainController
{
    public function index(): View
    {
//        User::factory()->create();
//        $r = LogVisit::select(['id', 'userId', 'visitDate', 'pageURL', 'pageType'])
//            ->where('id', '=', 1)
//            ->getRows();
//
//        dd($r);
//        $db = DB::connection('clickhouse')->getClient();
//
//        $statement = $db->insert(
//            'log_visits',
//            [
//                [1, 1, time(), 'articles/show/1', 'articles'],
//                [2, 1, time(), 'articles/show/2', 'articles'],
//                [3, 1, time(), 'articles/show/3', 'articles'],
//                [4, 1, time(), 'articles/show/4', 'articles'],
//            ],
//            ['id', 'userId', 'visitDate', 'pageURL', 'pageType']
//        );
//        dd($statement);

        return view('main.index');
    }
}

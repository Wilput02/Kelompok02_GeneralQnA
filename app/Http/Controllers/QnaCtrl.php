<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QnaCtrl extends Controller
{
    //
    public function index()
    {
        return view('qna', [
            'title' => 'QNA Page',
            'active' => 'QNA'
        ]);
    }
}

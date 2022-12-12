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

    public function updata(Request $request)
    {
        $validatedt = $request->validate([
            'context' => 'required|min:5|',
            'question' => 'required|min:5|',
        ]);

        if ($validatedt) {
            return response()->json(['question' => $validatedt['question'], 'context' => $validatedt['context']]);
        }
    }
}

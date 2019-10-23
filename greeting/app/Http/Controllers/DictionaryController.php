<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DictionaryController extends Controller
{
    public function checkDictionary(Request $request)
    {
        $arr = ['dog' => 'chó', 'cat' => 'mèo', 'hello' => 'xin chào'];
        foreach ($arr as $english => $vietnamese) {
            if ($request->english == $english) {
                $result = $vietnamese;
                return view('showResultFound', compact('english','result'));
            }
        }
        return view('notFound',compact('english'));
    }

    public function dictionary()
    {
        return view('englishTranslation');
    }
}

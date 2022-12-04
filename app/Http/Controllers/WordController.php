<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class WordController extends Controller
{
    public function show($word)
    {
        function is_anagram($str1, $str2)
        {
            if (count_chars(''.$str1, 1) == count_chars(''.$str2, 1))
                return true;
            else
                return false;
        }
        $len = strlen($word);
        $sql = "word LIKE '%" . $word[0] . "%'";
        $i = 1;
        $resArr = array();
        while ($i < $len) {
            $sql = $sql . " and word LIKE '%" . $word[$i] . "%'";
            $i = $i + 1;
        }
        $results = DB::select("SELECT word FROM `words` WHERE ($sql) and CHAR_LENGTH(word)=$len");
        foreach($results as $elem){
            if(is_anagram($word, $elem -> word)){
                array_push($resArr, $elem -> word);
            }
        }
        $resArr = array_unique($resArr);
        return response()->json($resArr, 200);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\URL;


class fileUpload extends Controller
{



    public function fileUpload(Request $request)
    {
        if ($request->isMethod('post')) {
            $finalName = $request->file('file')->getClientOriginalName();
            if ($request->hasFile('file')) {
                $request->file('file')->storeAs('anagramlist/', $finalName, 'public');
            }
            $connect = new PDO("mysql:host=d114435.mysql.zonevs.eu;dbname=d114435sd482612", "d114435sa436596", "a7dJUewQST3M64535", array(PDO::MYSQL_ATTR_LOCAL_INFILE => true));
            $loadDataToTempTableSql = "LOAD DATA LOCAL INFILE '".URL::to('/').'/api/download/'.$finalName."' INTO TABLE words LINES TERMINATED BY '\n';";
            $connect->exec($loadDataToTempTableSql);
            return True;
        }
    }
}
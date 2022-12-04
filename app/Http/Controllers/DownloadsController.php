<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller;
class DownloadsController extends Controller
{
    public function show($file){
        $filePath = storage_path('app/public/anagramlist/' . $file);
        if (!file_exists($filePath)) {
        }
    
        return response()->download($filePath);
    }
}

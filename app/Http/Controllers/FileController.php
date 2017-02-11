<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Das\ReadFile as Csv;

class FileController extends Controller
{
    public function upload(){
        return view('file');
    }

    public function showUploadFile(Request $request){
        $file = $request->file('filename'); //note que 'photo' remete ao nome do campo no formulário

        $destinationPath = public_path().DIRECTORY_SEPARATOR.'files';
        $fileName = $file->getClientOriginalName();

        $file->move($destinationPath, $fileName);

        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=file.csv",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );
        $file_txt = $destinationPath.DIRECTORY_SEPARATOR.$fileName;
        $file = Csv::lerTxt($file_txt );
        $csv_name = $destinationPath.DIRECTORY_SEPARATOR.'output.csv';
        Csv::arrayToCsv($file, $csv_name);

        return response()->file($csv_name, $headers);

   }
}

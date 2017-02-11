<?php

namespace Das;

class ReadFile {
    static public function lerTxt($file){
        $file = file($file);
        $tamanho = count($file) - 2;
        $file = array_slice($file, 1, $tamanho);
        
        $new_file = array_map(function($line){
            $nome = substr($line, 234, 40);
            $endereco = substr($line, 274, 50);
            return ['nome' => $nome, 'endereco' => $endereco];
        }, $file);

        return $new_file;
    }

    static public function arrayToCsv($array_file, $save_file){
        $fp = fopen($save_file, 'w');

        foreach ($array_file as $line) {
            fputcsv($fp, $line, ';');
        }

        fclose($fp);
    }
}
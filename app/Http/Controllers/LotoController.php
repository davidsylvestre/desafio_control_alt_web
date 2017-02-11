<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Das\Utils;

class LotoController extends Controller
{
    public function random(){
        $random_numbers = Utils::randonGen(1,25,15);
        return view('random', ['numbers' => $random_numbers]);
    }
}

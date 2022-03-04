<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class HomeController extends Controller
{
   public function index() {

    $data = Movie::all();
        return view('home', compact('data'));
    }
}

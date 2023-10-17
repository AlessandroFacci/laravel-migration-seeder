<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        $title = 'Trains';
        $trains = Train::all();
        return view('train.index', compact('trains', 'title'));
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function index()
  {
    $title = "Home";
    return view('home', compact('title'));
  }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpController extends Controller
{
  public function showHelp(){
    return view('help');
}

  public function showFaqs(){
    return view('answers');
}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function dashboard(): View
  {
    return view("dashboard");
  }
}
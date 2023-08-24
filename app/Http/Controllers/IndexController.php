<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
  // app/Http/Controllers/IndexController.php
public function index()
{
    return view('pages.index');
}

}

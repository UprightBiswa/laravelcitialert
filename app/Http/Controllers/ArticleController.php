<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
   // app/Http/Controllers/ArticleController.php
public function index()
{
    return view('pages.userGuide');
}

}

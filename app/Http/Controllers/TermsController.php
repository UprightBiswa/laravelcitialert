<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TermsController extends Controller
{
    // app/Http/Controllers/TermsController.php
public function index()
{
    return view('pages.terms');
}
}

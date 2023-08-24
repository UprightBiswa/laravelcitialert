<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
   // app/Http/Controllers/PrivacyController.php
public function index()
{
    return view('pages.privacy');
}


}

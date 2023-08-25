<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GrievanceController extends Controller
{
    public function track(Request $request)
    {
        $token = $request->input('token');
        $apiUrl = "https://grievance.indigidigital.in/api/grievances/findbytoken/$token";

        $response = Http::get($apiUrl);

        if ($response->successful()) {
            $data = $response->json()['data'];
            return view('pages.track', compact('data'));
        } else {
            return view('pages.error');
        }
    }
}

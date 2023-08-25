<?php
// app/Http/Controllers/IndexController.php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{
    public function index()
    {
        // Fetch data from API
        $response = Http::get('https://grievance.indigidigital.in/api/grievances');
        $data = $response->json()['data']; // Access the 'data' array from the response

        // Initialize counters for stats
        $totalComplaints = count($data);
        $totalSolvedComplaints = 0;
        $uniqueUsers = [];

        foreach ($data as $complaint) {
            // Check if $complaint is an array and contains 'status' key
            if (is_array($complaint) && array_key_exists('status', $complaint)) {
                // Count total solved complaints
                if ($complaint['status'] === 'Closed') {
                    $totalSolvedComplaints++;
                }

                // Count total users
                if (array_key_exists('citizen_mobile', $complaint)) {
                    $uniqueUsers[$complaint['citizen_mobile']] = true;
                }
            }
        }

        $totalUsers = count($uniqueUsers);

        // Pass data to the view
        return view('pages.index', compact('totalComplaints', 'totalSolvedComplaints', 'totalUsers'));
    }
}

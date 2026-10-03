<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\project;
use App\models\enquiry;
use App\models\user;

class DashboardController extends Controller
{
    function showsummary()
    {
       
$p = Project::count();
$e = Enquiry::count();

$data = [
    'projects' => $p,
    'enquiries' => $e
];

return view('dashboard', compact('data'));

    }
}

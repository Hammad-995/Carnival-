<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobSeekerController extends Controller
{
    public function index()
    {
        return view('admin-panel.job-seeker.index');
    }
    
}

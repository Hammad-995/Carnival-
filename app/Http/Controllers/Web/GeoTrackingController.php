<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeoTrackingController extends Controller
{
    public function index()
    {
        return view('admin-panel.geo-tracking.index');
    }
}

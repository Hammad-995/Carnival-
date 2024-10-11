<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BroadcastingController extends Controller
{
    public function index()
    {
        return view('admin-panel.broadcasting.index');
    }

    public function create()
    {
        return view('admin-panel.broadcasting.create');
    }
    public function store(Request $request)
    	{
        	dd($request->all());
    	}
}

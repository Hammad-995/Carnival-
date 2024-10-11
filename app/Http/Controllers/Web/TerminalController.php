<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TerminalController extends Controller
{
    public function index()
    {
        return view('admin-panel.terminal.index');
    }

    public function store(Request $request)
    	{
        	dd($request->all());
    	}
}

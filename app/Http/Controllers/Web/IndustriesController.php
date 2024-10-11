<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndustriesController extends Controller
{
    public function index()
    {
        return view ('admin-panel.industries.index');
    }

    public function show()
    {
        return view ('admin-panel.industries.show');
    }

    public function post()
    {
        return view ('admin-panel.industries.post');
    }
    
    public function delete()
    {
        return view ('admin-panel.industries.delete');
    }

    public function create()
    {
        return view('admin-panel.industries.create');
    }
    public function store(Request $request)
    {
        dd($request->all());
    }
}

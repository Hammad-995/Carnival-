<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerServiceController extends Controller
{
    public function index()
    {
        return view('admin-panel.customer-service.index');
    }
}

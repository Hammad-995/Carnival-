<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SentContractsController extends Controller
{
    public function index()
    {
        return view('admin-panel.sent-contracts.index');
    }
}

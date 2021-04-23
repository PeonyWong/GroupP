<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YServiceController extends Controller
{
    public function index() {
        return view('youth_service');
    }
}

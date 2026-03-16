<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ApplicationController extends Controller
{
    public function index()
    {
        return view('admin.applications.index');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employee');
    }

    public function add()
    {
        return view('addemployee');
    }
}

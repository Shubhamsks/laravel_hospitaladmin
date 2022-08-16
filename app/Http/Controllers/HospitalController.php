<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;

class HospitalController extends Controller
{
    public function index()
    {
       return view('index');
    }
}

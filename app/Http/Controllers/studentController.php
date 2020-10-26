<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class studentController extends Controller
{
    public function index()
    {
      $students = student::all();

      return view("index" , ["students" => $students]);
    }
}

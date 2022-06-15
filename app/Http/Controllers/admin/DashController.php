<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashController extends Controller
{
    function showindex(){
        return view("admin.index");
    }
}

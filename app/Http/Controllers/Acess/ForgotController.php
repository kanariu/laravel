<?php

namespace App\Http\Controllers\Acess;
use Illuminate\Support\Facades\Password;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ForgotController extends Controller
{

    public function index(){
        return view();
    }
}
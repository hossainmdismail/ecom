<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminOrder extends Controller
{
    public function order(){
        return view('backend.order.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Referal;
use Auth;

class ReferalController extends Controller
{
    public function relationship(Request $request)
    {
    	$input = $request->all();
    	$relationship = Referal::create($input);
    }
}

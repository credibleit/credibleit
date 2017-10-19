<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Carbon\Carbon;

class MemberController extends Controller
{
    public function index()
    {
    	$now = Carbon::now();
    	$member = Auth::user()->load('card');
    	$transactions = Auth::user()->transactions();
    }
}

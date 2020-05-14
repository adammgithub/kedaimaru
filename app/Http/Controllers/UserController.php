<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
    	$user = DB::table('users')->where('is_admin', '0' )->get();
    	return view('users.index', ['user'=>$user]);
    }
}

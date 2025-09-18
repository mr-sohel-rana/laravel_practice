<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Phone;
class UserController extends Controller
{
    function index(){
      $user = User::with('phone')->get();
        $phone = Phone::with('user')->find(2);
       return response()->json([

    'phone' => $phone,

]);

    }
}

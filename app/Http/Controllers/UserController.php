<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class UserController extends Controller
{
    public function index()
    {
        // Cache::forget('users'); //clear cache
        //php artisan clear:cache
        $users =  Cache::remember('users',3, function(){ //for day 60seconds*60minutes*24hours
                return User::select('name','email','email_verified_at','updated_at')->get();

            });
    //    return User::select('name','email','email_verified_at','updated_at')->get();
        return view('users', compact('users'));
    }
}

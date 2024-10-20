<?php

namespace App\Http\Controllers\Frontend\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserAccountController extends Controller
{
    public function index(){
        return view('frontend.content.account.index');
    }
}
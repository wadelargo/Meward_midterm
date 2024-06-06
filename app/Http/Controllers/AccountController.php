<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    public function index(){
        $accounts = Account::orderBy('id')->get();
        return view('account.index', ['accounts'=> $accounts]);
    }
}

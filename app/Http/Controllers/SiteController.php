<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
     public function user(){
    return user('views.user');
}

public function welcome(){
  return welcome('views.welcome');
}

public function account(){
    return account('views.account');
}
}

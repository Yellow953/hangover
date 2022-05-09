<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PortfolioController extends Controller{
    public function show($user){
        $user = User::findOrFail($user);
        return view('portfolio', ['user'=>$user]);
    }

}

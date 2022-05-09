<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use App\Models\drink_user;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AdminController extends Controller{
    public function index(){
        $user_count = User::count();
        $drink_count = Drink::count();
        $user_orders = auth()->user()->drinks()->count();

        return View('admin', compact('user_count', 'drink_count', 'user_orders'));
    }

    public function userTable(){
        $users = User::all();

        return View('userTable', compact('users'));
    }

    public function drinkTable(){
        $drinks = Drink::all();

        return View('drinkTable', compact('drinks'));
    }

    public function destroy($id){
        User::query()->where('id', $id)->delete();
        return redirect('/admin/userTable');
    }
    public function deleteDrink($id){
        Drink::query()->where('id', $id)->delete();
        return redirect('/admin/drinkTable');
    }
}

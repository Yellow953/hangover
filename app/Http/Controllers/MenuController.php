<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller{
    public function index(){
        $drinks = DB::select('select * from drinks');
        return view('menu', ['drinks'=>$drinks]);
    }

    public function show(Drink $drink){
        return view('drinkdetails', [
            'drink'=>$drink,
        ]);
    }

    public function edit(Drink $drink){
        $user = auth()->user();
        $drink->customers()->attach($user);
        return view('success');
    }

    public function create(){
        return view('createDrink');
    }

    public function store(){
        $data = request()->validate([
            'name'=>'required',
            'type'=>'required',
            'price'=>'required',
            'source'=>'required',
        ]);

        $drink = new Drink();
        $drink->name = $data['name'];
        $drink->type = $data['type'];
        $drink->price = $data['price'];
        $drink->source = $data['source'];
        $drink->save();

        return redirect('/admin/drinkTable');
    }
}

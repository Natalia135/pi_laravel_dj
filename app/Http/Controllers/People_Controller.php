<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class People_Controller extends Controller
{
public function create(Request $request){
    $items=new People();
    $items->name=$request->name;
    $items->surname=$request->surname;
    $items->phone_number=$request->phone_number;
    $items->adress=$request->adress;
    $items->country=$request->country;
    $items->save();

    return response()->json('New person added successfully');
}
   
public function update(Request $request){
    $items=People::findorfail($request->id);

    $items->name=$request->name;
    $items->surname=$request->surname;
    $items->phone_number=$request->phone_number;
    $items->adress=$request->adress;
    $items->country=$request->country;
    $items->save();

    return response()->json('Data updated successfully');
}

public function delete(Request $request){
    $items = People::findorfail($request->id)->delete();

    return response()->json('Person deleted successfully');
}

public function get_all(Request $request){
    $items=People::all();

    return response()->json($items);
}
public function get_person(Request $request){
    $items=People::findorfail($request->id);
    
    return response()->json($items);
}
}
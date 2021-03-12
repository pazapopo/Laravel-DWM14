<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use App\Models\Character;



class CharacterController extends Controller {
    public static function add(Request $request){
        Character::add($request);
        return redirect('/list');
    }
    public static function delete(Request $request){
        Character::destroy($request->id);
        return redirect('/list');
    }
    
    public static function update(Request $request)
    {   $character=Character::find($request->id);
            $character-> name= $request->name;
            $character->author_id=$request->author_id; 
            $character->create_year=$request->create_year; 
            $character->name_bd=$request->name_bd;  
            $character->save();
        return redirect('/list');
    }
}
<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use App\Models\Author;



class AuthorController extends Controller {
    public static function add(Request $request){
        Author::add($request);
        return redirect('/listAuteur');
    }
    public static function delete(Request $request){
        Author::destroy($request->id);
        return redirect('/listAuteur');
    }
    
    public static function update(Request $request)
    {   $author=Author::find($request->id);
            $author-> name= $request->name;
            $author->birthday=$request->birthday; 
            $author->nationality=$request->nationality;  
            $author->save();
        return redirect('/listAuteur');
    }
}
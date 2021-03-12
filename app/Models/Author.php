<?php

namespace App\Models;
use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{public $timestamps = false;
    public function character(){
        return $this->hasMany(Character::class);
    }
    public static function add(Request $request){
        $author= new Author;
        $author->name = $request->name;
        $author->birthday = $request->birthday;
        $author->nationality= $request->nationality;
        $author->save();
        return ;
    }
    public static function getAuthor($id){
        return Author::find($id);
    }
}
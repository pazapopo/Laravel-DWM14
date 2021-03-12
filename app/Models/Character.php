<?php

namespace App\Models;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Character extends Model
{public $timestamps = false;
    public static function getcharacter($id){
        return Character::find($id);
    }

    public static function add(Request $request){
        $character= new Character;
        $character->name = $request->name;
        $character->create_year = $request->create_year;
        $character->name_bd = $request->name_bd;
        $character->author_id = $request->author_id;
        $character->save();
        return ;
    }
    public function author(){
        return $this ->belongsTo(Author::class);
    }

}
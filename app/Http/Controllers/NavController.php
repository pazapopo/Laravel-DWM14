<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use App\Models\Character;


class NavController extends Controller
{
    public function index()
    {
        return view('welcome');
        
    }

    public function list()
    {
        $characters = character::all();  
        return view('list', compact('characters',));
    }
    public function listAuteur()
    {
        $authors = Author::all();  
        return view('listAuteur', compact('authors',));
    }
    public function character($id)
    {
        $character = Character::getcharacter($id);
        return view('character', compact('character'));
    }
    public function author($id)
    {
        $author = Author::getauthor($id);
        return view('author', compact('author'));
    }
    public function ajoutcharacter()
    {
        $authors= Author::all()->sortBy('name');
        $characters = Character::all()->sortBy('name');
        return view('add_character', compact('characters','authors'));
    }
    public function ajoutauthor()
    {
        return view('add_author');
    }
    public function update($id)
    {
        $character = Character::getCharacter($id);
        $authors = Author::all()->sortBy('name');
        return view('update', compact('character'),compact('authors'));
    }
    public function updateAuthor($id)
    {
        $author = Author::getAuthor($id);
        return view('update_Author',compact('author'));
    }
}
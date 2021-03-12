@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="/css/ajout.css">
@endsection

@section ('title','Ajouter')

@section('content')
    <div class="fond">
        <h1>Ajouter un personnage</h1>
    </div>

    <form action="/addCharacter" method="post" class="formulaire">
        @csrf
        <div class="form">
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name">
        </div>
        <div class="form">
            <label for="author">Dessinateur :</label>
            <select id="" name="author_id">
                @foreach ($authors as $author)
                    <option value="{{$author->id}}">{{$author->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form">
            <label for="create_year">Année de création :</label>
            <input type="number" id="create_year" name="create_year">
        </div>
        <div class="form">
            <label for="name_bd">Nom de la BD affilié :</label>
            <input type="text" id="name_bd" name="name_bd">
        </div>
        <div class="form">
            <button type="submit"> Enregistrer le Personnage </button>
        </div>
    </form>
@endsection
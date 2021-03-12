@extends('layouts.layout')
@section('css')
    <link rel="stylesheet" href="/css/ajout.css">
@endsection
@section ('title','Modification Personnage')

@section('content')

<div class="fond">
    <h1>Modifier le personnage</h1>
</div>

<form action="/update" method="post" class="formulaire">
    @csrf
    <input type="hidden" name="id" value="{{$character->id}}">
    <div class="form">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" value="{{$character->name}}">
    </div>
    <div class="form">
        <label for="author">Dessinateur:</label>
        <select id="" name="author_id">
            @foreach ($authors as $author)
                <option value="{{$author->id}}">{{$author->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form">
        <label for="name_bd">Nom de BD affilié :</label>
        <input type="text" id="name_bd" name="name_bd" value="{{$character->name_bd}}">
    </div>
    <div class="form">
        <label for="create_year">Année de création:</label>
        <input type="number" id="create_year" name="create_year" value="{{$character->create_year}}">
    </div>
    <div class="form">
        <button type="submit"> Modifier le personnage </button>
    </div>
</form>
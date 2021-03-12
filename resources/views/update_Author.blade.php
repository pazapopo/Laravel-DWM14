@extends('layouts.layout')
@section('css')
    <link rel="stylesheet" href="/css/ajout.css">
@endsection
@section ('title','Modification Auteur')

@section('content')

<div class="fond">
    <h1>Modifier l'auteur</h1>
</div>

<form action="/updateAuthor" method="post" class="formulaire">
    @csrf
    <input type="hidden" name="id" value="{{$author->id}}">
    <div class="form">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" value="{{$author->name}}">
    </div>
    <div class="form">
        <label for="birthday">Année de naissance:</label>
        <input type="number" id="birthday" name="birthday" value="{{$author->birthday}}">
    </div>
    <div class="form">
        <label for="nationality">Nationalitée :</label>
        <input type="text" id="nationality" name="nationality" value="{{$author->nationality}}">
    </div>
    <div class="form">
        <button type="submit"> Modifier l'auteur </button>
    </div>
</form>
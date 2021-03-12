@extends('layouts.layout')
@section ('title','Ajouter Dessinateur')
@section('css')
    <link rel="stylesheet" href="/css/ajout.css">
@endsection
@section('content')

<div class="fond">
    <h1>Ajouter un Dessinateur</h1>
</div>

<form action="/add" method="post" class="formulaire">
    @csrf
    <div class="form">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name">
    </div>
    <div class="form">
        <label for="birthday">Année de naissance :</label>
        <input type="number" id="birthday" name="birthday">
    </div>
    <div class="form">
        <label for="nationality">Nationnalité :</label>
        <input type="text" id="nationality" name="nationality">
    </div>
    <div class="form">
        <button type="submit"> Enregistrer le  Dessinateur </button>
    </div>
</form>

@endsection
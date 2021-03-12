@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="/css/list.css">
@endsection
@section('title','Liste')
@section('content')
    <div class="fond">
        <h1>Liste des personnage</h1>
    </div>
    <div class="tableau">
        <table>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Année de création</th>
                    <th scope="col">BD affiliée</th>
                    <th scope="col">Dessinateur</th>
                </tr>
            </thead>
            @foreach($characters as $character)
                <tr>
                    <td>{{ $character ->id }}</td>
                    <td><a href="/character/{{$character->id}}">{{ $character ->name }}</a></td>
                    <td>{{ $character ->create_year}}</td>
                    <td> {{$character ->name_bd}} </td>
                    @if (isset( $character ->author->name))
                    <td>{{ $character ->author->name}}</td>
                    @else <td>Inconnu</td>
                    @endif
                    <td>
                        <form action="delete" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$character->id}}">
                            <button type="submit" class="bouton">SUPPRIMER</button>
                        </form>
                    </td>
                    <td>
                        <form action="/update/{{$character->id}}" method="GET">
                            @csrf
                            <input type="hidden" name="id" value="{{$character->id}}">
                            <button type="submit" class="bouton">MODIF</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection 
@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="/css/list.css">
@endsection
@section('title','Liste')
@section('content')
    <div class="fond">
        <h1>Liste des dessinateurs</h1>
    </div>
    <div class="tableau">
        <table>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Année de naissance</th>
                    <th scope="col">Nationalité</th>
                </tr>
            </thead>
            @foreach($authors as $author)
                <tr>
                    <td>{{ $author ->id }}</td>
                    <td><a href="/author/{{$author->id}}">{{ $author ->name }}</a></td>
                    <td>{{ $author ->birthday}}</td>
                    <td>{{ $author ->nationality}}</td>
                    <td>
                        <form action="delete" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$author->id}}">
                            <button type="submit" class="bouton">SUPPRIMER</button>
                        </form>
                    </td>
                    <td>
                        <form action="/updateAuthor/{{$author->id}}" method="GET">
                            @csrf
                            <input type="hidden" name="id" value="{{$author->id}}">
                            <button type="submit" class="bouton">MODIF</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection 
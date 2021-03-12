@extends('layouts.layout')
@section ('title','Dessinateur')
@section('css')
    <link rel="stylesheet" href="/css/list.css">
@endsection

@section('content')
    <div class="fond">
        <h1>{{$author->name}}</h1>
    </div>
    <div class="tableau">
        <table>
            <thead>
                <tr>
                    <th scope="col">Année de naissance</th>
                    <th scope="col">Nationalité</th>
                </tr>
            </thead>
            <thead>
                <tr>
                    <td>{{ $author ->birthday }}</td>
                    <td>{{ $author ->nationality }}</td>
                </tr>
            </thead>
        </table>
    </div>
@endsection
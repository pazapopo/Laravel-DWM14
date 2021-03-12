@extends('layouts.layout')
@section ('title','Personnage')
@section('css')
    <link rel="stylesheet" href="/css/list.css">
@endsection

@section('content')
    <div class="fond">
        <h1>{{$character->name}}</h1>
    </div>
    <div class="tableau">
        <table>
            <thead>
                <tr>
                    <th scope="col">Année de création</th>
                    <th scope="col">Bd affiliée</th>
                    <th scope="col">Dessinateur</th>
                </tr>
            </thead>
            <thead>
                <tr>
                    <td>{{ $character ->create_year }}</td>
                    <td>{{ $character ->name_bd }}</td>
                    <td>{{ $character ->author->name }}</td>
                </tr>
            </thead>
        </table>
    </div>
@endsection
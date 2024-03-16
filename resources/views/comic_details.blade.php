@extends('layout.app')

@section('title', $comic['series'])

@section('main-content')
<main>
    <h1>{{$comic['title']}}</h1>
</main>
@endsection
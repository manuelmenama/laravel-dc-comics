@extends('layouts.main')

@section('content')

<div class="container">
    <h1>dettaglio</h1>

    <h3>{{$comic_detail->title}}</h3>
    <img src="{{ $comic_detail->thumb }}" alt="{{$comic_detail->title}}">
    <p>{{$comic_detail->description}}</p>
    <p>Price: {{$comic_detail->price}} $</p>
    <p>Series: {{$comic_detail->series}}</p>
    <p>Sale date: {{$comic_detail->sale_date}}</p>
    <p>Type: {{$comic_detail->type}}</p>
    <a href="{{ route('comics.index') }}" class="btn btn-info">TORNA ALLA LISTA</a>
</div>

@endsection

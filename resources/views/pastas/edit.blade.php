@extends('layouts.main')

@section('content')

<div class="container">

    <h1>Edit: {{ $comic->title }}</h1>

    @if ($errors->any())

        <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                <ul>
                    <li>{{ $error }}</li>
                </ul>
            @endforeach
        </div>


    @endif

    <form action="{{ route('comics.update', $comic) }}" method="POST">
    @csrf
    @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Scrivi il titolo..." name="title" value="{{old('title', $comic->title)}}">
            @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror


        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" placeholder="Thumb path..." name="thumb" value="{{old('thumb', $comic->thumb)}}">
            @error('thumb')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="Price..." name="price" value="{{old('price', $comic->price)}}">
            @error('price')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" placeholder="Series..." name="series" value="{{old('series', $comic->series)}}">
            @error('series')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" placeholder="Sale date..." name="sale_date" value="{{old('sale_date', $comic->sale_date)}}">
            @error('sale_date')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" placeholder="Type..." name="type" value="{{old('type', $comic->type)}}">
            @error('type')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" rows="3" name="description">{{old('description', $comic->description )}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">SUBMIT</button>

    </form>
    @include('partials.form-delete', ['title'=>$comic->title, 'id'=>$comic->id])

</div>


@endsection

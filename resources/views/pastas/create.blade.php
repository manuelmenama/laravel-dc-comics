@extends('layouts.main')

@section('content')

<div class="container">

    <h1>form CREATE</h1>

    <form action="{{ route('comics.store') }}" method="POST">
    @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Scrivi il titolo..." name="title">
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" class="form-control" id="thumb" placeholder="Thumb path..." name="thumb">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" placeholder="Price..." name="price">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" placeholder="Series..." name="series">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="text" class="form-control" id="sale_date" placeholder="Sale date..." name="sale_date">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" placeholder="Type..." name="type">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" rows="3" name="description"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">SUBMIT</button>

    </form>
</div>


@endsection

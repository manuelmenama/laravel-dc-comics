@extends('layouts.main')

@section('content')

<div class="container">

    <h1>Vista CRUD</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Series</th>
            <th scope="col">Type</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($comics as $comic)

                <tr>
                    <td>{{$comic->id}}</td>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->type}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('comics.show', $comic) }}"><i class="fa-regular fa-eye"></i></a>
                    </td>
                </tr>

            @empty
                <h3>No comic found</h3>
            @endforelse
        </tbody>
    </table>

    {{$comics->links()}}


</div>



@endsection

@extends('layouts.main')

@section('content')

<div class="container">

    <h1>Vista CRUD</h1>

    @if (session('deleted'))

        <div class="alert alert-success" role="alert">
            {!! session('deleted') !!}
        </div>

    @endif



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
                        <a class="btn btn-warning" href="{{ route('comics.edit', $comic) }}"><i class="fa-solid fa-pencil"></i></a>
                        {{-- <form onsubmit="return confirm('Confermi l\'eliminazione di {{ $comic->title }}')" class="d-inline" action="{{ route('comics.destroy', $comic) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fa-regular fa-trash-can" title="delete"></i></button>
                        </form> --}}
                        @include('partials.form-delete', ['title'=>$comic->title, 'id'=>$comic->id])
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

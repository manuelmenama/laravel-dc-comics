{{-- componente da includere con @include() --}}

<form onsubmit="return confirm('Confermi l\'eliminazione di {{ $title }}')" class="d-inline" action="{{ route('comics.destroy', $id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger"><i class="fa-regular fa-trash-can" title="delete"></i></button>
</form>

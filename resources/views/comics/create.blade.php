@extends('layouts.app')


@section('content')

<div class="container">
    <h1>Create New Comic</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <form action="{{route('comics.store')}}" method="post">
    @csrf
    
    <label for="title">Title</label>
    <input class="form-control mb-4" type="text" name="title" id="title" placeholder="Insert your title">

    <label for="description">Descrizione</label>
    <textarea class="form-control mb-4" name="description" id="description" placeholder="Insert a description"> </textarea>

    <label for="thumb">Immagine</label>
    <input class="form-control " type="text" name="thumb" id="thumb" placeholder="Insert a URL Image">
     <div id="imageHelp" class="form-text mb-4">Esempio: https://picsum.photos/200/300</div>

    <label for="price">Prezzo</label>
    <input class="form-control mb-4" type="text" name="price" id="price" placeholder="Insert a price">

    <label for="series">Serie</label>
    <input class="form-control mb-4" type="text" name="series" id="series" placeholder="Insert a series">

    <button class="btn btn-primary my-5" type="submit">Save</button>
    
    </form>
</div>

@endsection
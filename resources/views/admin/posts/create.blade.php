@extends('layouts.admin')


@section('admin_content')

    <h1 class="text-center my-4">CREATE A NEW POST</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container-fluid">

        <form action="{{ route('admin.posts.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" name="title" id="title" class="form-control mb-4" placeholder="Inserisci un titolo"
                    aria-describedby="helpTitle">
            </div>


            <div class="form-group">
                <label for="image">Immagine</label>
                <input type="text" name="image" id="image" class="form-control " placeholder="Inserisci URL di un'immagine"
                    aria-describedby="helpImage">
                <div id="helpImage" class="text-muted mb-4">URL Immagine</div>
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control mb-4" name="body" id="body" cols="20" rows="5"
                    placeholder="Inserisci una descrizione"></textarea>
            </div>

            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>

@endsection

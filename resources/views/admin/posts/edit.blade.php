@extends('layouts.admin')


@section('admin_content')

    <div class="container">
        <h1>Edit Post</h1>

        <form action="{{ route('admin.posts.update', $post->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" name="title" id="title" class="form-control mb-4" placeholder="Inserisci Titolo"
                    aria-describedby="helpTitle">
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" name="image" id="image" class="form-control" placeholder="Inserisci Immagine"
                    aria-describedby="helpImage">
                <small id="helpImage" class="text-muted mb-4">Inserisci URL</small>
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <input type="text" name="body" id="body" class="form-control mb-4" placeholder="Inserisci descrizione"
                    aria-describedby="helpBody">
            </div>

            <button class="btn btn-primary" type="submit">Update</button>

        </form>

    </div>

@endsection

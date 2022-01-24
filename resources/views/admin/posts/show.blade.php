@extends('layouts.admin')

@section('admin_content')
    <div class="card text-white bg-secondary w-25 my-2 m-auto">
        <img class="card-img-top" src="{{ $post->image }}" alt="">
        <div class="card-body">
            <h4 class="card-title">{{ $post->title }}</h4>
            <p class="card-text">{{ $post->body }}</p>
        </div>
    </div>
@endsection

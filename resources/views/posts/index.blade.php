@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row my-4">

            @foreach ($posts as $post)
                <div class="col-3">
                    <a class="text-decoration-none" href="{{ route('post', $post->id) }}">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ $post->image }}" alt="">
                            <div class="card-body">
                                <h4 class="card-title">{{ $post->title }}</h4>
                                <p class="card-text">{{ $post->body }}</p>
                            </div>
                        </div>
                    </a>

                </div>


            @endforeach

        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row my-4 justify-content-center">

            <div class="col-6">
                <div class="card">
                    <img class="card-img-top" style="height: 350px" src="{{ $post->image }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">{{ $post->title }}</h4>
                        <p class="card-text">{{ $post->body }}</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection

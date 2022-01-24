@extends('layouts.admin')

@section('admin_content')
    <div class="text-center my-5">

        <a class="btn btn-primary " href="{{ route('admin.posts.create') }}" role="button">CREATE</a>
    </div>

    <div class="container-fluid">

        <div class="text-center">

        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Body</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td><img width="100" src="{{ $post->image }}" alt=""></td>
                        <td>{{ $post->body }}</td>

                    </tr>

                @endforeach

            </tbody>
        </table>

    </div>

@endsection

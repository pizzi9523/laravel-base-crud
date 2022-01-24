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
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td><img width="100" src="{{ $post->image }}" alt=""></td>
                        <td>{{ $post->body }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('admin.posts.show', $post->id) }}">View</a>
                        </td>

                        <td>
                            <a class="btn btn-primary" href="{{ route('admin.posts.edit', $post->id) }}">Edit</a>
                        </td>

                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger " data-bs-toggle="modal"
                                data-bs-target="#delete{{ $post->id }}">
                                Delete
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="delete{{ $post->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="{{ $post->id }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Sei sicuro di voler eliminare il post
                                                {{ $post->title }}?</h5>
                                            <button type="button" class="btn-close" data-bs-bs-dismiss="modal"
                                                aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $post->body }}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')

                                                <button class="btn btn-danger" type="submit">SI, Cancella <i
                                                        class="fa fa-trash" aria-hidden="true"></i>.</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </td>
                    </tr>

                @endforeach

            </tbody>
        </table>

    </div>

@endsection

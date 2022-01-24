@extends('layouts.admin')

@section('admin_content')


<div class="container-fluid">
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="text-center">

        <a class="btn btn-primary my-2" href="{{route('admin.comics.create')}}">CREATE</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Price</th>
                <th>Series</th>
                <th>Sale Data</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->description}}</td>
                    <td><img width="100" src="{{$comic->thumb}}" alt=""></td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->type}}</td>
                    <td><a class="btn btn-primary" href="{{route('comic', $comic->id)}}">View</a></td>
                    <td><a class="btn btn-primary" href="{{route('admin.comic.edit', $comic->id)}}">Edit</a></td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#delete{{$comic->id}}">
                          Delete
                        </button>
                    </td>
                    
                </tr>
                
                
                
                <!-- Modal -->
                <div class="modal fade" id="delete{{$comic->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">{{$comic->series}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        
                                    </button>
                            </div>
                            <div class="modal-body">
                                ⚠️ Sei sicuro di eliminare il fumetto? ⚠️
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <form action="{{route('admin.comic.destroy', $comic->id)}}" method="post">
                                 @csrf
                                 @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
                
           
        </tbody>
    </table>

</div>
    
    
    
@endsection
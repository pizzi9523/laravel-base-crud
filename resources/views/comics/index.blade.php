@extends('layouts.app')

@section('content')
<div class="container my-5">
     <table class="table">
            <thead>
                <tr>
                    <th>Titolo</th>
                    <th>Descrizione</th>
                    <th>Prezzo</th>
                    <th>Serie</th>
                    <th>Data</th>
                    <th>Tipo</th>
                    <th>Options</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                <tr>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->description}}</td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->type}}</td>
                    <td>Edit - View - Delete</td>

                </tr>
                    
                @endforeach
                
               
            </tbody>
        </table>

</div>
       
        
@endsection
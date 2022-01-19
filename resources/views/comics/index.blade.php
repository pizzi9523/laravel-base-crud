@extends('layouts.app')

 @section('content')
 <div class="jumbotron container-fluid"></div>

<div class="container-fluid series_container">
    <div class="container series">
        <div class="current_series">CURRENT SERIES</div>

        <div class="row py-6">
            @foreach($comics as $comic)
            <div class="col-2">


                <a href="{{ route('comic', ['comic' => $comic->id]) }}">
                    <div class="my_card comic">
                        <img src="{{ $comic->thumb }}" alt="" />
                        <div class="text-uppercase">{{ $comic->series }}</div>
                    </div>
                </a>

            </div>
            @endforeach
        </div>
        <div class="load_more">LOAD MORE</div>

    </div>
</div>




<div class="main_footer">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="my_card">
                    <div class="img_wrapper">
                        <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="" />
                    </div>
                    <div class="my_card_text">DIGITAL COMICS</div>
                </div>
            </div>

            <div class="col">
                <div class="my_card">
                    <div class="img_wrapper">
                        <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="" />
                    </div>
                    <div class="my_card_text">DC MERCHANDISE</div>
                </div>
            </div>
            <div class="col">
                <div class="my_card">
                    <div class="img_wrapper">
                        <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="" />
                    </div>
                    <div class="my_card_text">SUBSCRIPTION</div>
                </div>
            </div>
            <div class="col">
                <div class="my_card">
                    <div class="img_wrapper">
                        <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="" />
                    </div>
                    <div class="my_card_text">COMIC SHOP LOCATOR</div>
                </div>
            </div>
            <div class="col">
                <div class="my_card">
                    <div class="img_wrapper">
                        <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="" />
                    </div>
                    <div class="my_card_text">DC POWER VISA</div>
                </div>
            </div>
        </div>
    </div>
</div>
 {{--<div class="container my-5">
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
        --}}
        
@endsection
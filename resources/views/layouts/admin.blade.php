<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Admin - DC COMICS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <!-- Script  -->
        <script src="{{asset('js/app.js')}}" defer></script>

    </head>


    <body>

        @include('partials.header')

        <aside class="">
            <div id="dashboard">
                <div id="list-example" class="list-group">
                    <a class="list-group-item list-group-item-action" href="{{route('admin.comics')}}">Comics</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-2">Posts</a>
                </div>
                

            </div>
        </aside>

        <main id="site_main" class="admin_main">
            @yield('admin_content')
        </main>


        
    </body>
</html>

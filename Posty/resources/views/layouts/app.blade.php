<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viemport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Posty</title>

        <link rel="stylesheet" href="{{asset('css/app.css') }}">

    </head>

    <body class="bg-gray-200">
        <nav class="p-6 bg-white flex justify-between mb-6">
            <ul class="flex items-center">
                <li>
                    <a href="/" class="p-3">Home</a>
                </li>
                <li>
                    <a href="{{route ('dashboard') }}" class="p-3">Dashboard</a>
                </li>
                <li> 
                    <a href="{{route('posts')}}" class="p-3">Post</a>
                </li>
            </ul>

            <ul class="flex items-center">

                @if (auth()->user())

                <li>
                    <a href="" class="p-3">{{auth()->user()->name}}</a>
                </li>
                
                <form action="{{route('logout')}}" method="post" class="p-3 inline">
                

                @csrf
                
                <button type="submit" >Logout</button>
                
                
                </form>

                @else

                <li>
                    <a href="{{route('login')}}" class="p-3">Login</a>
                </li>

                <li>
                    <a href="{{route('register') }}" class="p-3">Register</a>
                </li>
              

                @endif

              
        
            </ul>
        </nav>


    @yield('content')



    </body>
</html>


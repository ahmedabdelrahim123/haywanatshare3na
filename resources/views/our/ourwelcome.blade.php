<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>OurWelcome</title>
</head>
<body class="">
<nav class="p-4 bg-indigo-900 flex justify-between w-full fixed">
        <ul class="flex items-center text-2xl">
            <li>
                <a href="{{route('ourhome')}}" class="p-5">
                    <img class="inline w-10" src="images/dog.jpg" >
                </a>
            </li>
            <li>
                <a href="{{route('oursearch')}}" class="p-5 bg-gradient-to-r text-white hover:from-green-400 hover:to-blue-500">Browse Pets</a>
            </li>
            <li>
                <a href="" class="p-5 bg-gradient-to-r  hover:from-green-400 text-white hover:to-blue-500">Add a pet</a>
            </li>
            <li>
                <a href="" class="p-5 bg-gradient-to-r  hover:from-green-400 text-white hover:to-blue-500">About us</a>
            </li>
        </ul>

        <ul class="flex items-center text-2xl">

            @auth
            <li>
                <a href="" class="p-5">{{auth()->Ourusers()->username}}</a>
            </li>
            <li>
                <form action="" class="inline p-3" method="post">
                    @csrf
                    <button type="submit">logout</button>
                </form>

            </li>
            @endauth

            @guest
            <li>
                <a href="{{route('ourlogin')}}" class="p-5 bg-gradient-to-r text-white hover:from-green-400 hover:to-blue-500">login</a>
            </li>
            <li>
                <a href="{{route('ourregister')}}" method="get"  class="p-5 bg-gradient-to-r text-white hover:from-green-400 hover:to-blue-500">register</a>
            </li>
            @endguest



        </ul>
    </nav>
    <div >
    @yield('content')
    </div>
</body>
</html>
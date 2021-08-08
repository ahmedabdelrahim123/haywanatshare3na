<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>OurWelcome</title>
</head>
<body class="bg-gray-500">
<nav class="p-6 bg-white flex justify-between mb-6 ">
        <ul class="flex items-center">
            <li>
                <a href="/" class="p-5">Home</a>
            </li>
            <li>
                <a href="" class="p-5">Dashboard</a>
            </li>
            <li>
                <a href="" class="p-5">Post</a>
            </li>
        </ul>

        <ul class="flex items-center">

            @auth
            <li>
                <a href="" class="p-5">{{auth()->user()->username}}</a>
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
                <a href="{{route('ourlogin')}}" class="p-5">login</a>
            </li>
            <li>
                <a href="{{route('ourregister')}}" class="p-5">register</a>
            </li>
            @endguest



        </ul>
    </nav>
    <div >
    @yield('content')
    </div>
</body>
</html>
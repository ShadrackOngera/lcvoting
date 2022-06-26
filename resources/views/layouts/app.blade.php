<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>laracasts voting</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans text-gray-900 text-sm bg-gray-background">
        <header class="flex items-center justify-between px-8 py-4">
            <a href="#"><img src="{{ asset('img/logo.svg') }}" alt="Laracasts logo"></a>
            <div class="flex items-center">
                @if (Route::has('login'))
                    <div class="px-6 py-4">
                        @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <a href="#">
                    <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp" alt="avatar" class="w-h0 h-10 rounded-full">
                </a>
            </div>
        </header>
        <main class="mx-auto container flex max-w-custom ">
            <div class="w-70 mr-5" >
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, animi debitis ea enim id ipsam nemo neque nisi praesentium ullam unde vitae voluptates voluptatum! Asperiores debitis in odio suscipit? A hic ipsam libero, nesciunt officia praesentium quam quasi similique veniam!


            </div>
            <div class="w-175">
                <nav class="items-center flex justify-between text-xs">
                    <ul class="uppercase flex font-semibold border-b-4 pb-3 border-gray space-x-10">
                        <li><a href="#" class="border-b-4 pb-3  border-blue">All Ideas (87)</a></li>
                        <li><a href="#" class="border-b-4 pb-3  transition duration-150 ease-in text-gray-400 hover:border-blue border-blue">Considering (60)</a></li>
                        <li><a href="#" class="border-b-4 pb-3  transition duration-150 ease-in text-gray-400 hover:border-blue border-blue">In Progress (7)</a></li>
                    </ul>
                    <ul class="uppercase flex font-semibold border-b-4 pb-3 border-gray space-x-10 ">
                        <li><a href="#" class="border-b-4 pb-3  transition duration-150 ease-in text-gray-400 hover:border-blue border-blue">Implemented (5)</a></li>
                        <li><a href="#" class="border-b-4 pb-3  transition duration-150 ease-in text-gray-400 hover:border-blue border-blue">Closed (5)</a></li>
                    </ul>
                </nav>

                <div class="mt-8">
                    {{ $slot }}
                </div>
            </div>
        </main>
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white font-sans">

<div class="relative min-h-screen flex flex-col justify-center items-center bg-teal-600 text-white px-6 md:px-12 animate-fade-in">

    <img src="{{ asset('img/logo.png') }}" 
         alt="Logo" 
         class="absolute top-4 left-4 w-16 h-16 md:w-20 md:h-20">

        @if (Route::has('login'))
        <nav class="absolute top-6 right-6 flex gap-4">
            @auth
                <a href="{{ url('/dashboard') }}"
                   class="px-5 py-2 border border-white rounded-md text-white hover:bg-white hover:text-teal-400 transition">
                    Entrar
                </a>
            @else
                <a href="{{ route('login') }}"
                   class="px-5 py-2 border border-white rounded-md text-white hover:bg-white hover:text-teal-400 transition">
                    Entrar
                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                       class="px-5 py-2 border border-white rounded-md text-white hover:bg-white hover:text-teal-400 transition">
                        Criar conta
                    </a>
                @endif
            @endauth
        </nav>
        @endif

        <div class="text-center max-w-3xl mt-8">
            <h1 class="text-5xl md:text-6xl font-bold mb-4 animate-fade-in-delay-200">
                GETAE
            </h1>
            <p class="text-lg md:text-xl animate-fade-in-delay-400">
                <p>Seja bem vindo(a) ao</p>
                <b>Grêmio Estudantil dos Cursos Técnicos Integrados ao Ensino Médio</b>
            </p>
        </div>


    <style>
        @keyframes fade-in {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animate-fade-in {
            animation: fade-in 0.8s ease-out forwards;
        }
        .animate-fade-in-delay-200 {
            animation: fade-in 0.8s ease-out 0.2s forwards;
        }
        .animate-fade-in-delay-400 {
            animation: fade-in 0.8s ease-out 0.4s forwards;
        }
        .animate-fade-in-delay-600 {
            animation: fade-in 0.8s ease-out 0.6s forwards;
        }
    </style>

</body>
</html>

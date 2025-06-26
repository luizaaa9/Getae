
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        Grêmio Estudantil dos Cursos Técnicos Integrados
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-link-button href="{{ route('noticias.create') }}" style="margin:10px">
                        Criar notícias
                    </x-link-button>
                    @foreach ($noticias as $noticia)
                        <div>
                            <p><strong>{{ $noticia->titulo }}</strong></p>
                            {{ $noticia->conteudo }}
                            <br>
                        </div>
                        <br>
                            <img src="{{ asset('storage/' . $noticia->imagem) }}" alt="" style="margin: 0 20px">
                            <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
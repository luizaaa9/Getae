
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        Grêmio Estudantil dos Cursos Técnicos Integrados
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 relative-size-32">
                    @auth
                        @if (auth()->user()->isAdmin())
                            <x-link-button class="absolute-inset-x-0 top-0 h-16 ms-3 bg-lime-200 hover:bg-lime-300 hover:bg-lime-300 text-lime-700 border-lime-100 drop-shadow-xs " href="{{ route('noticias.create') }}" >
                                Criar notícias
                            </x-link-button>
                        @endif
                    @endauth
                    @foreach ($noticias as $noticia)
                        <div>
                            <p><strong>{{ $noticia->titulo }}</strong></p>
                            {{ $noticia->conteudo }}
                            <br>
                        </div>
                        <br>
                            <img src="{{ asset('storage/' . $noticia->imagem) }}" alt="" style="margin: 0 20px">
                        <br>
                        <form action="{{ route('noticias.destroy', $noticia->id) }}" method="POST" style="display:inline" onsubmit="return confirm('Confirma exclusão?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background:none; border:none; color:red; cursor:pointer;">Excluir</button>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

    <div class="py-12 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            @auth
                @if (auth()->user()->isAdmin())
                    <div class="text-center mb-6">
                        <a href="{{ route('noticias.create') }}" 
                        class=" mb-8 flex-1 text-center px-4 py-2 bg-teal-500 text-white rounded-lg hover:bg-teal-600 transition font-semibold">
                            Criar Nova Notícia
                        </a>
                    </div>
                @endif
            @endauth

            @foreach ($noticias as $noticia)
                <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg overflow-hidden flex flex-col md:flex-row items-center md:items-start">

                    <div class="w-full md:w-1/2 h-64 md:h-auto overflow-hidden">
                        <img src="{{ asset('storage/' . $noticia->imagem) }}" 
                             alt="{{ $noticia->titulo }}" 
                             class="w-full h-full object-cover">
                    </div>

                    <div class="w-full md:w-1/2 p-6 flex flex-col justify-between">
                        <div>
                            <h3 class="text-2xl font-bold text-teal-600 mb-2">
                                {{ $noticia->titulo }}
                            </h3>
                            <p class="text-gray-700 dark:text-gray-300 mb-4">
                                {{ $noticia->conteudo }}
                            </p>
                        </div>

                        @auth
                            @if (auth()->user()->isAdmin())
                                <div class="flex space-x-3">
                                    <a href="{{ route('noticias.edit', $noticia->id) }}" 
                                       class="px-4 py-2 bg-teal-600 text-white rounded-lg hover:bg-teal-700 transition">
                                       Editar
                                    </a>
                                    <form action="{{ route('noticias.destroy', $noticia->id) }}" method="POST" 
                                          onsubmit="return confirm('Confirma exclusão?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
                                            Excluir
                                        </button>
                                    </form>
                                </div>
                            @endif
                        @endauth
                    </div>

                </div>
            @endforeach

        </div>
    </div>
</x-app-layout>

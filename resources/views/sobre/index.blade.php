<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                @auth
                    @if (auth()->user()->isAdmin())
                        <div class="flex justify-center mb-6">
                            <x-link-button href="{{ route('sobre.create') }}" class="bg-teal-600 hover:bg-teal-700 text-white px-6 py-3 rounded-lg shadow-md transition">
                                Criar Informação
                            </x-link-button>
                        </div>
                    @endif
                @endauth

                <div class="grid grid-cols-1 gap-6">
                    @foreach ($informacao as $info)
                        <div class="w-full bg-gray-50 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-xl shadow-lg overflow-hidden">
                            <div class="flex flex-col md:flex-row items-center">
                                
                                <!-- Conteúdo -->
                                <div class="w-full md:w-2/3 p-6">
                                    <h2 class="text-2xl font-bold text-teal-600 dark:text-teal-400 mb-4">
                                        {{ $info->titulo }}
                                    </h2>
                                    <a href="{{ $info->descricao }}" class="text-gray-700 dark:text-gray-200 leading-relaxed mb-6">
                                        Clique aqui!
                                    </a>

                                    <div class="flex gap-4" style="margin-top:20px">
                                        <a href="{{ route('sobre.edit', $info->id) }}" 
                                           class="bg-teal-600 hover:bg-teal-300 text-white px-4 py-2 rounded-lg shadow-md transition">
                                           Editar
                                        </a>

                                        <form action="{{ route('sobre.destroy', $info->id) }}" method="POST" 
                                              onsubmit="return confirm('Confirma exclusão?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg shadow-md transition">
                                                Excluir
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

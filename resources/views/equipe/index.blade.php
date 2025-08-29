<x-app-layout>
    <x-slot name="header"></x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @auth
                @if (auth()->user()->isAdmin())
                    <div class="flex justify-center mb-6">
                        <x-link-button href="{{ route('equipe.create') }}" 
                                       class="bg-teal-500 hover:bg-teal-600 text-white px-4 py-2 rounded transition font-semibold">
                            Criar Membro
                        </x-link-button>
                    </div>
                @endif
            @endauth

            @if($equipe->isEmpty())
                <p class="text-gray-500 text-center">Nenhum membro cadastrado ainda.</p>
            @else
                <div class="flex flex-wrap justify-center gap-6">
                    @foreach ($equipe as $membro)
                        <div x-data="{ modalOpen: false }" 
                             class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 w-full sm:w-80 text-center transition hover:scale-105 relative">

                            <img src="{{ asset('storage/' . $membro->imagem) }}" 
                                 alt="{{ $membro->nome }}" 
                                 class="w-24 h-24 rounded-full object-cover mx-auto mb-4">

                            <h3 class="text-lg font-bold text-gray-800 dark:text-gray-100">{{ $membro->name }}</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400">{{ $membro->email }}</p>
                            <p class="text-sm text-gray-600 dark:text-gray-300">{{ $membro->turma }}</p>
                            <p class="text-sm text-gray-600 dark:text-gray-300 mt-2">{{ $membro->descricao }}</p>

                            @auth
                                @if (auth()->user()->isAdmin())
                                    <div class="mt-4 flex justify-center gap-2">
                                        <a href="{{ route('equipe.edit', $membro->id) }}" 
                                           class="px-3 py-1 bg-teal-500 text-white rounded hover:bg-teal-600 transition text-sm">
                                           Editar
                                        </a>

                                        <button @click="modalOpen = true" 
                                                class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 transition text-sm">
                                            Excluir
                                        </button>
                                    </div>

                                    <div x-show="modalOpen" x-cloak
                                         class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
                                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg w-11/12 max-w-md p-6 text-center">
                                            <h2 class="text-lg font-bold text-gray-800 dark:text-gray-100 mb-4">Confirma Exclusão?</h2>
                                            <p class="text-gray-600 dark:text-gray-300 mb-6">Esta ação não pode ser desfeita.</p>

                                            <div class="flex justify-center gap-4">
                                                <button @click="modalOpen = false" 
                                                        class="px-4 py-2 bg-gray-300 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded hover:bg-gray-400 dark:hover:bg-gray-600 transition">
                                                    Cancelar
                                                </button>

                                                <form action="{{ route('equipe.destroy', $membro->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" 
                                                            class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition">
                                                        Excluir
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                @endif
                            @endauth
                        </div>
                    @endforeach
                </div>
            @endif

        </div>
    </div>
</x-app-layout>

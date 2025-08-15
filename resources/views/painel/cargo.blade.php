
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
                    @auth
                        @if (auth()->user()->isAdmin())
                        
                            <form action="{{ route('equipe.mudarDescricao', $id) }}" method="POST">
                                @csrf

                                <input type="hidden" name="id" value="{{ $id }}">

                                <div>
                                    <x-input-label for="descricao" :value="__('Descrição')" />
                                    <x-text-input id="descricao" class="block mt-1" type="text" name="descricao" :value="old('titulo')" required autofocus autocomplete="nome" />
                                    <x-input-error :messages="$errors->get('descricao')" class="mt-2" />
                                </div>

                                <x-primary-button class="my-5">
                                    Gravar 
                                </x-primary-button>
                            </form>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
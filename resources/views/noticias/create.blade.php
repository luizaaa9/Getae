<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Notícias &raquo; Criar
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                        <form method="POST" action="{{ route('noticias.store') }}">
                            @csrf

                            <!-- Título -->
                            <div>
                                <x-input-label for="titulo" :value="__('Título')" />
                                <x-text-input id="titulo" class="block mt-1" type="text" name="titulo" :value="old('titulo')" required autofocus autocomplete="nome" />
                                <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
                            </div>

                            <!-- Descrição -->
                            <div>
                                <x-input-label for="conteudo" :value="__('Conteúdo')" />
                                <x-textarea id="conteudo" class="block mt-1" name="conteudo" required autofocus autocomplete="conteudo">{{ old('conteudo') }}</x-textarea>
                                <x-input-error :messages="$errors->get('conteudo')" class="mt-2" />
                            </div>

                            <x-primary-button class="my-5">
                                Gravar Produto
                            </x-primary-button>


                        </form>
                </div>
            </div>
        </div>
    </div>        
</x-app-layout>
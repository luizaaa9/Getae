<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Membro &raquo; Criar
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                        <form method="POST" action="{{ route('equipe.store') }}" enctype="multipart/form-data">
                            @csrf

                           <!-- Nome -->
                            <div>
                                <x-input-label for="nome" :value="__('Nome')" />
                                <x-text-input id="nome" class="block mt-1" type="text" name="nome" :value="old('nome')" required autofocus autocomplete="nome" />
                                <x-input-error :messages="$errors->get('nome')" class="mt-2" />
                            </div>

                            <!-- Turma -->
                            <div>
                                <x-input-label for="turma" :value="__('Turma')" />
                                <x-text-input id="turma" class="block mt-1" type="text" name="turma" :value="old('turma')" required autocomplete="turma" />
                                <x-input-error :messages="$errors->get('turma')" class="mt-2" />
                            </div>

                            <!-- Contato -->
                            <div>
                                <x-input-label for="contato" :value="__('Contato')" />
                                <x-text-input id="contato" class="block mt-1" type="text" name="contato" :value="old('contato')" autocomplete="contato" />
                                <x-input-error :messages="$errors->get('contato')" class="mt-2" />
                            </div>

                            <!-- Descrição -->
                            <div>
                                <x-input-label for="descricao" :value="__('Descrição')" />
                                <x-textarea id="descricao" class="block mt-1" name="descricao" autocomplete="descricao">{{ old('descricao') }}</x-textarea>
                                <x-input-error :messages="$errors->get('descricao')" class="mt-2" />
                            </div>

                            <!-- Imagem -->
                            <div>
                                <x-input-label for="imagem" :value="__('Imagem')" />
                                <input type="file" name="imagem" id="imagem" accept="image/*" />
                                <x-input-error :messages="$errors->get('imagem')" class="mt-2" />
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
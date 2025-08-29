<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Membro &raquo; Criar
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-lg p-6">

                <form method="POST" action="{{ route('equipe.store') }}" enctype="multipart/form-data" class="space-y-6 text-teal-600">
                    @csrf

                    <div>
                        <x-input-label for="nome" :value="__('Nome')" class="text-teal-600" />
                        <x-text-input id="nome" class="block mt-1 w-full border-2 border-teal-600 text-teal-600 placeholder-teal-400 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500" 
                                      type="text" name="nome" :value="old('nome')" required autofocus autocomplete="nome" />
                        <x-input-error :messages="$errors->get('nome')" class="mt-2 text-red-500" />
                    </div>

                    <div>
                        <x-input-label for="turma" :value="__('Turma')" class="text-teal-600" />
                        <x-text-input id="turma" class="block mt-1 w-full border-2 border-teal-600 text-teal-600 placeholder-teal-400 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500" 
                                      type="text" name="turma" :value="old('turma')" required autocomplete="turma" />
                        <x-input-error :messages="$errors->get('turma')" class="mt-2 text-red-500" />
                    </div>

                    <div>
                        <x-input-label for="contato" :value="__('Contato')" class="text-teal-600" />
                        <x-text-input id="contato" class="block mt-1 w-full border-2 border-teal-600 text-teal-600 placeholder-teal-400 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500" 
                                      type="text" name="contato" :value="old('contato')" autocomplete="contato" />
                        <x-input-error :messages="$errors->get('contato')" class="mt-2 text-red-500" />
                    </div>

                    <div>
                        <x-input-label for="descricao" :value="__('Descrição')" class="text-teal-600" />
                        <x-textarea id="descricao" class="block mt-1 w-full border-2 border-teal-600 text-teal-600 placeholder-teal-400 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500" 
                                    name="descricao" autocomplete="descricao">{{ old('descricao') }}</x-textarea>
                        <x-input-error :messages="$errors->get('descricao')" class="mt-2 text-red-500" />
                    </div>

                    <div>
                        <x-input-label for="imagem" :value="__('Imagem')" class="text-teal-600" />
                        <input type="file" name="imagem" id="imagem" accept="image/*" 
                               class="mt-1 block w-full text-teal-600 border-2 border-teal-600 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500">
                        <x-input-error :messages="$errors->get('imagem')" class="mt-2 text-red-500" />
                    </div>
                    <div class="text-center">
                        <x-primary-button class="px-6 py-2 bg-teal-600 text-white rounded hover:bg-teal-700 transition">
                            Gravar Membro
                        </x-primary-button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>

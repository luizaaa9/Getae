<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-lg p-6">

                <form action="{{ route('equipe.update', $membro->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6 text-teal-600">
                    @csrf
                    @method('PUT')

                    <div>
                        <x-input-label for="name" :value="__('Nome')" class="text-teal-600" />
                        <x-text-input id="name" name="name" type="text" :value="old('name', $membro->name)"
                                      class="block mt-1 w-full border-2 border-teal-600 text-teal-600 placeholder-teal-400 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500"/>
                        <x-input-error :messages="$errors->get('name')" class="mt-1 text-red-500"/>
                    </div>

                    <div>
                        <x-input-label for="email" :value="__('Email')" class="text-teal-600" />
                        <x-text-input id="email" name="email" type="email" :value="old('email', $membro->email)"
                                      class="block mt-1 w-full border-2 border-teal-600 text-teal-600 placeholder-teal-400 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500"/>
                        <x-input-error :messages="$errors->get('email')" class="mt-1 text-red-500"/>
                    </div>

                    <!-- Turma -->
                    <div>
                        <x-input-label for="turma" :value="__('Turma')" class="text-teal-600" />
                        <x-text-input id="turma" name="turma" type="text" :value="old('turma', $membro->turma)"
                                      class="block mt-1 w-full border-2 border-teal-600 text-teal-600 placeholder-teal-400 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500"/>
                        <x-input-error :messages="$errors->get('turma')" class="mt-1 text-red-500"/>
                    </div>

                    <div>
                        <x-input-label for="descricao" :value="__('Descrição')" class="text-teal-600" />
                        <x-textarea id="descricao" name="descricao" rows="4"
                                    class="block mt-1 w-full border-2 border-teal-600 text-teal-600 placeholder-teal-400 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500">{{ old('descricao', $membro->descricao) }}</x-textarea>
                        <x-input-error :messages="$errors->get('descricao')" class="mt-1 text-red-500"/>
                    </div>

                    <div>
                        <x-input-label for="imagem" :value="__('Imagem')" class="text-teal-600" />
                        <input type="file" name="imagem" id="imagem" accept="image/*"
                               class="block mt-1 w-full border-2 border-teal-600 text-teal-600 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500">
                        @if($membro->imagem)
                            <img src="{{ asset('storage/' . $membro->imagem) }}" alt="Imagem do Membro" class="mt-2 w-32 h-32 object-cover rounded-md">
                        @endif
                        <x-input-error :messages="$errors->get('imagem')" class="mt-1 text-red-500"/>
                    </div>

                    <div class="text-center">
                        <x-primary-button class="px-6 py-2 bg-teal-600 text-white rounded hover:bg-teal-700 transition">
                            Atualizar
                        </x-primary-button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>

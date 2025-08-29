<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-lg sm:rounded-xl overflow-hidden">
                <div class="p-8 space-y-6">

                    <form action="{{ route('sobre.update', $info->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <!-- Título -->
                        <div class="flex flex-col">
                            <x-input-label for="titulo" :value="__('Título')" class="text-teal-600 font-semibold mb-2" />
                            <x-text-input id="titulo"
                                class="block w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-teal-500 transition"
                                type="text" name="titulo"
                                value="{{ old('titulo', $info->titulo) }}" required autofocus />
                            <x-input-error :messages="$errors->get('titulo')" class="mt-1 text-sm text-red-500" />
                        </div>

                        <!-- Descrição -->
                        <div class="flex flex-col">
                            <x-input-label for="descricao" :value="__('Descrição')" class="text-teal-600 font-semibold mb-2" />
                            <x-textarea id="descricao"
                                class="block w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-teal-500 transition"
                                name="descricao" required>{{ old('descricao', $info->descricao) }}</x-textarea>
                            <x-input-error :messages="$errors->get('descricao')" class="mt-1 text-sm text-red-500" />
                        </div>

                        

                        <!-- Botão Atualizar -->
                        <div class="flex justify-center">
                            <x-primary-button class="bg-teal-600 hover:bg-teal-700 text-white font-semibold px-8 py-3 rounded-lg shadow-md transition transform hover:scale-105">
                                Atualizar Informação
                            </x-primary-button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

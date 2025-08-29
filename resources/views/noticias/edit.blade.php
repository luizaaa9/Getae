<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-teal-600 leading-tight">
            Editar Notícia
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-lg sm:rounded-xl overflow-hidden">
                <div class="p-8 space-y-6">

                    <form method="POST" action="{{ route('noticias.update', $noticia->id) }}" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <div class="flex flex-col">
                            <x-input-label for="titulo" :value="__('Título')" class="text-teal-600 font-semibold mb-2" />
                            <x-text-input id="titulo"
                                          class="block w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-teal-500 transition"
                                          type="text" name="titulo"
                                          :value="old('titulo', $noticia->titulo)" required autofocus />
                            <x-input-error :messages="$errors->get('titulo')" class="mt-1 text-sm text-red-500" />
                        </div>

                        <div class="flex flex-col">
                            <x-input-label for="conteudo" :value="__('Conteúdo')" class="text-teal-600 font-semibold mb-2" />
                            <x-textarea id="conteudo"
                                        class="block w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-teal-500 transition"
                                        name="conteudo" required>{{ old('conteudo', $noticia->conteudo) }}</x-textarea>
                            <x-input-error :messages="$errors->get('conteudo')" class="mt-1 text-sm text-red-500" />
                        </div>

                        <!-- Imagem -->
                        <div class="flex flex-col">
                            <x-input-label for="imagem" :value="__('Imagem')" class="text-teal-600 font-semibold mb-2" />
                            <input type="file" name="imagem" id="imagem" accept="image/*"
                                   class="block w-full text-gray-700 px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-teal-500 transition" />
                            @if($noticia->imagem)
                                <img src="{{ asset('storage/' . $noticia->imagem) }}" 
                                     alt="Imagem da Notícia"
                                     class="mt-3 w-40 h-40 object-cover rounded-lg border border-gray-200 dark:border-gray-700 shadow-md">
                            @endif
                            <x-input-error :messages="$errors->get('imagem')" class="mt-1 text-sm text-red-500" />
                        </div>

                        <!-- Botão Atualizar -->
                        <div class="flex justify-center">
                            <x-primary-button class="bg-teal-600 hover:bg-teal-700 text-white font-semibold px-8 py-3 rounded-lg shadow-md transition transform hover:scale-105">
                                Atualizar Notícia
                            </x-primary-button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

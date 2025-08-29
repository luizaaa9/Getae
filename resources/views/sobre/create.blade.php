<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Informação &raquo; Criar
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 dark:bg-gray-900 min-h-screen">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('sobre.store') }}" enctype="multipart/form-data" class="space-y-6">
                        @csrf

                        <!-- Título -->
                        <div>
                            <x-input-label for="titulo" :value="__('Título')" class="text-teal-600" />
                            <x-text-input id="titulo" type="text" name="titulo" :value="old('titulo')" required autofocus
                                class="block w-full mt-1 px-4 py-2 border-2 border-teal-400 rounded-lg text-gray-900 dark:text-gray-100 placeholder-teal-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500 transition" />
                            <x-input-error :messages="$errors->get('titulo')" class="mt-2 text-sm text-red-500" />
                        </div>

                        <!-- Descrição -->
                        <div>
                            <x-input-label for="descricao" :value="__('Descrição')" class="text-teal-600" />
                            <x-textarea id="descricao" name="descricao" required
                                class="block w-full mt-1 px-4 py-2 border-2 border-teal-400 rounded-lg text-gray-900 dark:text-gray-100 placeholder-teal-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500 transition"
                            >{{ old('descricao') }}</x-textarea>
                            <x-input-error :messages="$errors->get('descricao')" class="mt-2 text-sm text-red-500" />
                        </div>
                        <div class="flex justify-center">
    <x-primary-button
        class="px-6 bg-teal-600 hover:bg-teal-700 text-white font-semibold py-2 rounded-lg transition">
        Gravar Informação
    </x-primary-button>
</div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

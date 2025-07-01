<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Contatos
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @auth
                        @if (auth()->user()->isAdmin())
                            <x-link-button href="{{ route('contato.create') }}" style="margin:10px">
                                Criar Contato
                            </x-link-button>
                        @endif
                    @endauth

                    @foreach ($contato as $rede)
                        <div class="item" style="margin-bottom: 20px; padding: 10px; border-bottom: 1px solid #ddd;">
                            <div style="font-weight: bold; font-size: 1.2em;">
                                {{ $rede->titulo }}
                            </div>
                            <div style="margin-top: 5px;">
                            <a href="{{ $rede->descricao }}">Clique aqui!</a>
                                
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

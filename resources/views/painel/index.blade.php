
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
                        
                            <h1><strong>Painel de controle</strong></h1>
                            @foreach ($usuarios as $usuario)
                                <div>
                                    {{ $usuario->role }} |
                                    {{ $usuario->name }}
                                    <form action="{{ route('profile.toggleRole', $usuario->id) }}" method="POST" style="display:inline; margin-left:150px">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-warning">
                                            <b>{{ $usuario->role === 'admin' ? 'Rebaixar para User' : 'Promover para Admin' }}</b>
                                        </button>
                                    </form>
                                    <hr>
                                    <br>

                                </div>
                            @endforeach
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
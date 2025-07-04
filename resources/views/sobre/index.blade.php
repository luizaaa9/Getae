
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
                            <x-link-button href="{{ route('sobre.create') }}" style="margin:10px">
                                Criar Informação
                            </x-link-button>
                        @endif
                    @endauth
                    @foreach ($informacao as $info)
                        <div  style=" border: 1px solid gray; margin: 10px 0">
                            <br>
                                <img src="{{ asset('storage/' . $info->imagem) }}" alt="" style="margin: 0 20px; width: 200px;">
                            <br>
                            <h2><strong>{{ $info->titulo }}</strong></h2><br>
                            {{ $info->descricao }}
                            <br>
                            <form action="{{ route('sobre.destroy', $info->id) }}" method="POST" style="display:inline" onsubmit="return confirm('Confirma exclusão?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background:none; border:none; color:red; cursor:pointer;">Excluir</button>
                            </form>
                        </div>
                        
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
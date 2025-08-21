<nav x-data="{ open: false }" class="bg-green-600 shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('dashboard') }}">
                    <x-application-logo class="block h-10 w-auto text-white fill-current" />
                </a>
            </div>

            <!-- Links de Navegação -->
            <div class="hidden sm:flex space-x-8 text-white font-semibold uppercase tracking-wide">
                <a href="{{ route('dashboard') }}" 
                   class="{{ request()->routeIs('dashboard') ? 'border-b-2 border-white pb-1' : '' }} hover:border-b-2 hover:border-white">
                    Notícias
                </a>
                <a href="{{ route('equipe.index') }}" 
                   class="{{ request()->routeIs('equipe.index') ? 'border-b-2 border-white pb-1' : '' }} hover:border-b-2 hover:border-white">
                    Equipe
                </a>
                <a href="{{ route('sobre.index') }}" 
                   class="{{ request()->routeIs('sobre.index') ? 'border-b-2 border-white pb-1' : '' }} hover:border-b-2 hover:border-white">
                    Sobre
                </a>
                <a href="{{ route('contato.index') }}" 
                   class="{{ request()->routeIs('contato.index') ? 'border-b-2 border-white pb-1' : '' }} hover:border-b-2 hover:border-white">
                    Contato
                </a>
                @auth
                    @if (auth()->user()->isAdmin())
                        <a href="{{ route('painel.index') }}" 
                           class="{{ request()->routeIs('painel.index') ? 'border-b-2 border-white pb-1' : '' }} hover:border-b-2 hover:border-white">
                            Painel
                        </a>
                    @endif
                @endauth
            </div>

            <!-- Perfil -->
            <div class="flex items-center text-white space-x-2">
                <span class="text-sm font-semibold">
                    PERFIL
                </span>
                <svg xmlns="http://www.w3.org/2000/svg" 
                     class="h-5 w-5" 
                     fill="white" 
                     viewBox="0 0 24 24" 
                     stroke="none">
                    <path d="M12 12c2.7 0 4.9-2.2 4.9-4.9S14.7 2.2 12 2.2 7.1 4.4 7.1 7.1 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.9v2.4h19.2v-2.4c0-3.3-6.4-4.9-9.6-4.9z"/>
                </svg>
            </div>

        </div>
    </div>
</nav>

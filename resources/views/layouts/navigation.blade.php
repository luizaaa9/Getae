<nav class="relative w-full h-64">
    <!-- Imagem de fundo -->
    <div class="absolute inset-0">
        <img src="{{ asset('img/navbar-bg.png') }}" 
             alt="Fundo Navbar" 
             class="w-full h-full object-cover">
 
        <div class="absolute inset-0 bg-teal-500/40"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col justify-between" >

        <div class="flex justify-between items-center pt-4">

            <div class="flex-shrink-0">
                <a href="{{ route('dashboard') }}">
                        <img src="{{ asset('img/logo.png') }}" 
         alt="Logo" 
         class="absolute top-4 left-4 w-16 h-16 md:w-20 md:h-20">
            </a>
            </div>

            <!-- Perfil -->
            <div x-data="{ open: false }" class="relative flex items-center text-white space-x-2">
    <!-- Botão do perfil -->
    <button @click="open = !open" class="flex items-center focus:outline-none">
        <span class="text-sm font-semibold">PERFIL</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="white" viewBox="0 0 24 24">
            <path d="M12 12c2.7 0 4.9-2.2 4.9-4.9S14.7 2.2 12 2.2 7.1 4.4 7.1 7.1 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.9v2.4h19.2v-2.4c0-3.3-6.4-4.9-9.6-4.9z"/>
        </svg>
    </button>

    <!-- Dropdown -->
    <div x-show="open" @click.away="open = false" 
         class="absolute right-0 mt-2 w-40 bg-white dark:bg-gray-800 text-gray-800 dark:text-gray-100 rounded-lg shadow-lg py-2 z-50 transition transform origin-top-right">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full text-left px-4 py-2 hover:bg-teal-500 hover:text-white transition rounded">
                Sair da conta
            </button>
        </form>
    </div>
</div>

        </div>
</div>
        <div class="flex justify-center items-center space-x-16 mb-4 text-white font-semibold uppercase tracking-wide bg-teal-600 min-w-100% h-12">
            <a href="{{ route('dashboard') }}" class="hover:text-teal-300 transition">Notícias</a>
            <a href="{{ route('equipe.index') }}" class="hover:text-teal-300 transition">Equipe</a>
            <a href="{{ route('sobre.index') }}" class="hover:text-teal-300 transition">Sobre</a>
            
        </div>
    
</nav>

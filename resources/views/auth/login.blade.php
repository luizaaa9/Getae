<x-guest-layout>
    <div class="flex items-center justify-center min-h-screen bg-white">
        <div class="w-full max-w-sm p-6 border-2 border-green-500 rounded-lg shadow-sm text-center">
            
            <!-- Logo -->
            <div class="flex justify-center mb-4">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-16 h-16">
            </div>

            <!-- Título -->
            <h1 class="text-green-600 font-bold text-lg mb-6 uppercase">Seja Bem Vindo(a)!</h1>

            <!-- Formulário -->
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="mb-4 text-left">
                    <label for="email" class="block text-xs font-bold text-green-600 uppercase">Email</label>
                    <input id="email" 
                           type="email" 
                           name="email" 
                           value="{{ old('email') }}" 
                           required autofocus autocomplete="username"
                           class="w-full mt-1 px-3 py-2 border-2 border-green-500 rounded-full text-green-600 placeholder-green-400 focus:outline-none focus:ring-2 focus:ring-green-500" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-500" />
                </div>

                <!-- Senha -->
                <div class="mb-4 text-left">
                    <label for="password" class="block text-xs font-bold text-green-600 uppercase">Senha</label>
                    <input id="password" 
                           type="password" 
                           name="password" 
                           required autocomplete="current-password"
                           class="w-full mt-1 px-3 py-2 border-2 border-green-500 rounded-full text-green-600 placeholder-green-400 focus:outline-none focus:ring-2 focus:ring-green-500" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-500" />
                </div>

                <!-- Lembrar -->
                <div class="flex items-center mb-4">
                    <input id="remember_me" 
                           type="checkbox" 
                           name="remember"
                           class="text-green-600 border-green-500 rounded focus:ring-green-500">
                    <label for="remember_me" class="ml-2 text-xs text-green-600">Lembrar-se de mim</label>
                </div>

                <!-- Esqueci a senha -->
                <div class="mb-4 text-left">
                    @if (Route::has('password.request'))
                        <a class="text-xs text-green-600 hover:underline" href="{{ route('password.request') }}">
                            Esqueceu sua senha?
                        </a>
                    @endif
                </div>

                <!-- Botão -->
                <button type="submit" 
                        class="w-full bg-green-600 text-white font-semibold py-2 rounded-md hover:bg-green-700 transition">
                    Entrar
                </button>
            </form>
        </div>
    </div>
</x-guest-layout>

<x-guest-layout> 
    <div class="w-full max-w-sm p-6 border-2 border-teal-500 rounded-lg shadow-md text-center">
         <div class="flex justify-center mb-4"> <img src="{{ asset('img/logo.png') }}" alt="Logo" class="w-16 h-16"> </div> <!-- Título --> <h1 class="text-teal-600 font-bold text-xl mb-6 uppercase">Seja Bem-Vindo(a)!</h1> <!-- Formulário --> <form method="POST" action="{{ route('login') }}">
             @csrf
              <div class="mb-4 text-left"> 
                <label for="email" class="block text-xs font-bold text-teal-600 uppercase">Email</label> 
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" class="w-full mt-1 px-3 py-2 border-2 border-teal-500 rounded-full text-teal-600 placeholder-teal-300 focus:outline-none focus:ring-2 focus:ring-teal-500" /> 
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-500" /> 
            </div> 
             <div class="mb-4 text-left"> 
                <label for="password" class="block text-xs font-bold text-teal-600 uppercase">Senha</label>
                 <input id="password" type="password" name="password" required autocomplete="current-password" class="w-full mt-1 px-3 py-2 border-2 border-teal-500 rounded-full text-teal-600 placeholder-teal-300 focus:outline-none focus:ring-2 focus:ring-teal-500" /> 
                 <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-500" /> 
                </div>
                <div class="flex items-center mb-4"> 
                    <input id="remember_me" type="checkbox" name="remember" class="text-teal-600 border-teal-500 rounded focus:ring-teal-500">
                    <label for="remember_me" class="ml-2 text-xs text-teal-600">Lembrar-se de mim</label>
                </div> 
                 <div class="mb-4 text-left"> @if (Route::has('password.request')) <a class="text-xs text-teal-600 hover:underline" href="{{ route('password.request') }}"> Esqueceu sua senha? </a>
                 @endif </div>
                  <button type="submit" class="w-full bg-teal-600 text-white font-semibold py-2 rounded-md hover:bg-teal-700 transition"> Entrar </button>
                 </form> 
                </div>
             </x-guest-layout>

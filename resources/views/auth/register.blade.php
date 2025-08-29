<x-guest-layout>
    <div class="w-full max-w-sm p-6 border-2 border-teal-500 rounded-lg shadow-md text-center mx-auto mt-12 bg-white dark:bg-gray-800">
        <!-- Logo -->
        <div class="flex justify-center mb-4">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="w-16 h-16">
        </div>

        <!-- Título -->
        <h1 class="text-teal-600 font-bold text-xl mb-6 uppercase">Registrar Novo Usuário</h1>

        <!-- Formulário -->
        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <!-- Nome -->
            <div class="text-left">
                <label for="name" class="block text-xs font-bold text-teal-600 uppercase mb-1">Nome</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                       class="w-full px-3 py-2 border-2 border-teal-500 rounded-full text-teal-600 placeholder-teal-300 focus:outline-none focus:ring-2 focus:ring-teal-500" />
                <x-input-error :messages="$errors->get('name')" class="mt-1 text-sm text-red-500" />
            </div>

            <!-- Email -->
            <div class="text-left">
                <label for="email" class="block text-xs font-bold text-teal-600 uppercase mb-1">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required
                       class="w-full px-3 py-2 border-2 border-teal-500 rounded-full text-teal-600 placeholder-teal-300 focus:outline-none focus:ring-2 focus:ring-teal-500" />
                <x-input-error :messages="$errors->get('email')" class="mt-1 text-sm text-red-500" />
            </div>

            <!-- Turma -->
            <div class="text-left">
                <label for="turma" class="block text-xs font-bold text-teal-600 uppercase mb-1">Turma</label>
                <input id="turma" type="text" name="turma" value="{{ old('turma') }}"
                       class="w-full px-3 py-2 border-2 border-teal-500 rounded-full text-teal-600 placeholder-teal-300 focus:outline-none focus:ring-2 focus:ring-teal-500" />
                <x-input-error :messages="$errors->get('turma')" class="mt-1 text-sm text-red-500" />
            </div>

            <!-- Descrição -->
            <div class="text-left">
                <label for="descricao" class="block text-xs font-bold text-teal-600 uppercase mb-1">Descrição</label>
                <textarea id="descricao" name="descricao"
                          class="w-full px-3 py-2 border-2 border-teal-500 rounded-lg text-teal-600 placeholder-teal-300 focus:outline-none focus:ring-2 focus:ring-teal-500">{{ old('descricao') }}</textarea>
                <x-input-error :messages="$errors->get('descricao')" class="mt-1 text-sm text-red-500" />
            </div>

            <!-- Imagem -->
            <div class="text-left">
                <label for="imagem" class="block text-xs font-bold text-teal-600 uppercase mb-1">Imagem de Perfil</label>
                <input id="imagem" type="file" name="imagem" accept="image/*" required
                       class="w-full px-3 py-2 border-2 border-teal-500 rounded-full text-teal-600 placeholder-teal-300 focus:outline-none focus:ring-2 focus:ring-teal-500" />
                <x-input-error :messages="$errors->get('imagem')" class="mt-1 text-sm text-red-500" />
            </div>

            <!-- Password -->
            <div class="text-left">
                <label for="password" class="block text-xs font-bold text-teal-600 uppercase mb-1">Senha</label>
                <input id="password" type="password" name="password" required
                       class="w-full px-3 py-2 border-2 border-teal-500 rounded-full text-teal-600 placeholder-teal-300 focus:outline-none focus:ring-2 focus:ring-teal-500" />
                <x-input-error :messages="$errors->get('password')" class="mt-1 text-sm text-red-500" />
            </div>

            <!-- Confirm Password -->
            <div class="text-left">
                <label for="password_confirmation" class="block text-xs font-bold text-teal-600 uppercase mb-1">Confirmar Senha</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required
                       class="w-full px-3 py-2 border-2 border-teal-500 rounded-full text-teal-600 placeholder-teal-300 focus:outline-none focus:ring-2 focus:ring-teal-500" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 text-sm text-red-500" />
            </div>

            <!-- Botão -->
            <button type="submit"
                    class="w-full bg-teal-600 text-white font-semibold py-2 rounded-md hover:bg-teal-700 transition">
                Registrar
            </button>

            <!-- Link para login -->
            <div class="mt-4 text-sm">
                <a class="text-teal-600 hover:underline" href="{{ route('login') }}">Já registrado? Entrar</a>
            </div>
        </form>
    </div>
</x-guest-layout>

<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nome')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Turma -->
        <div class="mt-4">
            <x-input-label for="turma" :value="__('Turma')" />
            <x-text-input id="turma" class="block mt-1 w-full" type="text" name="turma" :value="old('turma')" />
            <x-input-error :messages="$errors->get('turma')" class="mt-2" />
        </div>

        <!-- Descrição -->
        <div class="mt-4">
            <x-input-label for="descricao" :value="__('Descrição')" />
            <textarea id="descricao" name="descricao" class="block mt-1 w-full">{{ old('descricao') }}</textarea>
            <x-input-error :messages="$errors->get('descricao')" class="mt-2" />
        </div>

        <!-- Imagem -->
        <div class="mt-4">
            <x-input-label for="imagem" :value="__('Imagem de Perfil')" />
            <input id="imagem" type="file" name="imagem" class="block mt-1 w-full" accept="image/*" required>
            <x-input-error :messages="$errors->get('imagem')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Senha')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar Senha')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400" href="{{ route('login') }}">
                {{ __('Já registrado?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Registrar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

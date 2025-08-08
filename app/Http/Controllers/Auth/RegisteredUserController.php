<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:8'],
            'turma' => ['nullable', 'string', 'max:255'],
            'descricao' => ['nullable', 'string'],
            'imagem' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
        ]);

        $path = $request->file('imagem')->store('imagens', 'public');

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'turma' => $request->turma,
            'descricao' => $request->descricao,
            'imagem' => $path,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}

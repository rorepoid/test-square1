<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class Register extends Component
{
    public $form = [
        'name' => '',
        'email' => '',
        'password' => '',
        'password_confirmation' => '',
    ];

    public function render()
    {
        return view('livewire.register');
    }

    public function submit()
    {
        $this->validate([
            'form.name' => 'required|string',
            'form.email' => 'required|email|unique:users,email',
            'form.password' => 'required|confirmed',
        ]);

        auth()->login(User::create($this->form));

        return redirect()->route('home');
    }
}

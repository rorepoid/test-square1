<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $form = [
        'email' => '',
        'password' => ''
    ];

    public function render()
    {
        return view('livewire.login');
    }

    public function submit()
    {
        $this->validate([
            'form.email' => 'required|email',
            'form.password' => 'required'
        ]);

        if (Auth::attempt($this->form)) {
            return redirect()->intended('/');
        }

        $this->addError('form.email', 'Incorrect username or password.');
    }
}

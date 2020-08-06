<?php

namespace App\Http\Livewire;

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
    }
}

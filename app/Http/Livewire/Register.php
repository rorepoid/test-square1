<?php

namespace App\Http\Livewire;

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

    }
}

<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;

class CreatePost extends Component
{
    public $title;
    public $body;

    public function render()
    {
        return view('livewire.post.create-post');
    }

    public function submit()
    {
        auth()->user()->posts()->create([
            'title' => $this->title,
            'body' => $this->body,
        ]);

        return redirect()->route('home');
    }
}

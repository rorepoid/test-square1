<?php

namespace App\Http\Livewire\Post;

use App\Post;
use Livewire\Component;

class ListAllPosts extends Component
{
    public $posts;

    public function render()
    {
        return view('livewire.post.list-all-posts');
    }

    public function mount()
    {
        $this->posts = Post::all();
    }
}

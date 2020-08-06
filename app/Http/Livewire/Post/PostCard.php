<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;

class PostCard extends Component
{
    public $post;

    public function render()
    {
        return view('livewire.post.post-card');
    }

    public function mount($post)
    {
        $this->post = $post;
    }
}

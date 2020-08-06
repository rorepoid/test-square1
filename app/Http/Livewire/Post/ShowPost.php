<?php

namespace App\Http\Livewire\Post;

use App\Post;
use Livewire\Component;

class ShowPost extends Component
{
    public $post;

    public function render()
    {
        return view('livewire.post.show-post');
    }

    public function mount($id)
    {
        $this->getPost($id);
    }

    public function getPost($id)
    {
        $this->post = Post::find($id);
    }
}

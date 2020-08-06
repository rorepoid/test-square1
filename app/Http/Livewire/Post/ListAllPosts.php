<?php

namespace App\Http\Livewire\Post;

use App\Post;
use Livewire\Component;

class ListAllPosts extends Component
{
    public $posts;
    public $order_by = 'desc';

    public function render()
    {
        $this->getPosts();
        return view('livewire.post.list-all-posts');
    }

    public function mount()
    {
        $this->getPosts();
    }

    public function getPosts()
    {
        $this->posts = Post::orderBy('updated_at', $this->order_by)->get();
    }
}

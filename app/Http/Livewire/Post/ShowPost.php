<?php

namespace App\Http\Livewire\Post;

use App\Post;
use Illuminate\Support\Facades\Cache;
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
        $this->post = Cache::remember("post.show.{$id}", now()->addHours(3), function () use ($id) {
            return Post::find($id);
        });
    }
}

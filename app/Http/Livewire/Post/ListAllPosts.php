<?php

namespace App\Http\Livewire\Post;

use App\Post;
use App\Services\Square1;
use Illuminate\Support\Facades\Cache;
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
        $this->posts = Cache::remember("post.all.{$this->order_by}", 60, function () {
            Post::insertFromApi(new Square1);
            return Post::orderBy('updated_at', $this->order_by)->get();
        });
    }
}

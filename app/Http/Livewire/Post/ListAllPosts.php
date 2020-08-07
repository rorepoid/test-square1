<?php

namespace App\Http\Livewire\Post;

use App\Post;
use App\Services\Square1;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class ListAllPosts extends Component
{
    public $order_by = 'desc';

    public function render()
    {
        return view('livewire.post.list-all-posts', ['posts' => $this->getPosts()]);
    }

    public function getPosts()
    {
        $page = request()->input('page', 1);

        return Cache::remember("post.all.page_{$page}.{$this->order_by}", 60, function () {
            Post::importDataFromApi(new Square1);
            return Post::orderBy('updated_at', $this->order_by)->paginate(10);
        });
    }
}

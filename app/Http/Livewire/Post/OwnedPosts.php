<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;

class OwnedPosts extends Component
{
    public $order_by = 'desc';

    public function render()
    {
        $this->getPosts();
        return view('livewire.post.owned-posts', ['posts' => $this->getPosts()]);
    }

    public function mount()
    {
        $this->getPosts();
    }

    public function getPosts()
    {
        return auth()->user()
                    ->posts()
                    ->orderBy('updated_at', $this->order_by)
                    ->paginate(10);
    }
}

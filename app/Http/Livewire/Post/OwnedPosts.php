<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;

class OwnedPosts extends Component
{
    public $posts;
    public $order_by = 'desc';

    public function render()
    {
        return view('livewire.post.owned-posts');
    }

    public function mount()
    {
        $this->posts = auth()->user()
                            ->posts()
                            ->orderBy('updated_at', $this->order_by)
                            ->get();
    }
}

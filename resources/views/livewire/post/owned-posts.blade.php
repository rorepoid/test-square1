<div class="w-full min-h-screen flex justify-center bg-gray-300 overflow-y-auto">
    <div class="container w-full h-full">
        <div class="flex justify-between m-8">
            <h1 class="text-4xl font-bold font-mono">My Posts</h1>
            <select wire:model="order_by" class="p-4 rounded-lg bg-gray-600 text-justify text-white font-bold" name="order_by">
                <option value="desc">Newer</option>
                <option value="asc">Older</option>
            </select>
        </div>
            <div class="flex justify-center flex-wrap">
                @foreach($posts as $post)
                    <livewire:post.post-card  :post="$post" :key="$post->id"/>
                @endforeach
            </div>
        </div>
    </div>
</div>

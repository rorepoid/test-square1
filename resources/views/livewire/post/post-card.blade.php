<div wire:click="show" class="bg-white w-5/6 lg:w-7/12 mb-6 p-6 rounded-lg border-2 border-blue-700 hover:shadow-xl cursor-pointer">
    <h1 class="text-2xl font-semibold mb-4">{{ $post->title }}</h1>
    <span class="mt-16">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($post->updated_at))->diffForHumans() }}</span>
</div>
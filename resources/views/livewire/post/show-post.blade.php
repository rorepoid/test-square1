<div class="w-full h-full flex justify-center overflow-y-auto">
    <div class="container w-full h-full px-3 lg:px-8">
        <div class="flex justify-between m-8">
            <h1 class="text-3xl xl:text-5xl font-bold">{{ $post->title }}</h1>
        </div>
            <div class="flex justify-center flex-wrap px-3">
                <p class="text-xl font-mono text-left">{{ $post->body }}</p>
            </div>
        </div>
    </div>
</div>

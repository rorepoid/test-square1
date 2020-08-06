<div class="w-full h-full flex justify-center bg-gray-300">
    <div class="container w-full h-full bg-gray-400">
        <div class="flex flex-col justify-center m-8">
            <h1 class="text-4xl font-bold font-mono">Create new Post</h1>
        </div>
        <div class="m-5">
            <form wire:submit.prevent="submit">
            <div class="relative w-full mb-3">
                <label class="block uppercase text-gray-700 text-xs font-bold mb-2 select-none" for="title">Title</label>
                <input type="text" wire:model.lazy="title"
                    class="shadow-md appearance-none border rounded-lg w-full py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="title"
                    placeholder="Title"
                    required
                    autofocus>
                <label class="mt-8 block uppercase text-gray-700 text-xs font-bold mb-2 select-none" for="body">Body</label>
                <textarea wire:model.lazy="body"
                    class="shadow-md appearance-none border rounded-lg w-full py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="body"
                    placeholder="Type the content of the post"
                    rows="15"
                    required
                    autofocus
                    ></textarea>
                <button class="mt-8 px-24 py-4 rounded-full bg-blue-700 text-white font-bold font-sans text-lg">Save Post</button>
            </form>
        </div>
    </div>
</div>

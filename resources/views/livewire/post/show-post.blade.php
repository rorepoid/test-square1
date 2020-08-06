<div class="w-full h-full flex justify-center bg-gray-300 overflow-y-auto">
    <div class="container w-full h-full bg-gray-400">
        <div class="flex justify-between m-8">
            <h1 class="text-4xl font-bold font-mono">All Posts</h1>
            <select wire:model="order_by" class="p-4 rounded-lg bg-gray-600 text-justify text-white font-bold" name="order_by">
                <option value="desc">Newer</option>
                <option value="asc">Older</option>
            </select>
        </div>
            <div class="flex justify-center flex-wrap">
            </div>
        </div>
    </div>
</div>

<div class="mx-full px-4 h-screen bg-gray-900">
    <div class="flex content-center items-center justify-center h-full">
        <div class="w-full lg:w-4/12 px-4">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0">
                <div class="rounded-t mb-0 px-6 py-6">
                    <div class="text-center mb-3">
                        <h6 class="text-gray-600 text-xl font-bold">Register in {{ config('app.name', 'Roa-P') }}</h6></div>
                    <hr class="mt-6 border-b-1 border-gray-400">
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <form wire:submit.prevent="submit">
                        <div class="relative w-full mb-3">
                            <label class="block uppercase text-gray-700 text-xs font-bold mb-2 select-none" for="name">Name</label>
                            <input type="text" wire:model.lazy="form.name"
                                class="shadow-md appearance-none border rounded-lg w-full py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="name"
                                placeholder="Name"
                                required
                                autofocus>
                        @error('form.name')
                            <span class="text-red-700">{{ $message }}</span>
                        @enderror
                        </div>
                        <div class="relative w-full mb-3">
                            <label class="block uppercase text-gray-700 text-xs font-bold mb-2 select-none" for="email">Email</label>
                            <input type="email" wire:model.lazy="form.email"
                                class="shadow-md appearance-none border rounded-lg w-full py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="email"
                                placeholder="Email"
                                required
                                autofocus>
                        @error('form.email')
                            <span class="text-red-700">{{ $message }}</span>
                        @enderror
                        </div>
                        <div class="relative w-full mb-3">
                            <label class="block uppercase text-gray-700 text-xs font-bold mb-2 select-none mt-6" for="password">Password</label>
                            <input type="password" wire:model.lazy="form.password"
                                class="shadow-md appearance-none border rounded-lg w-full py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="password"
                                placeholder="Password"
                                required
                                autofocus>
                            @error('form.password')
                                <span class="text-red-700">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="relative w-full mb-3">
                            <label class="block uppercase text-gray-700 text-xs font-bold mb-2 select-none mt-6" for="password">Confirm Password</label>
                            <input type="password" wire:model.lazy="form.password_confirmation"
                                class="shadow-md appearance-none border rounded-lg w-full py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="password"
                                placeholder="Confirm Password"
                                required
                                autofocus>
                            @error('form.password')
                                <span class="text-red-700">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="text-center mt-6">
                            <button
                                class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded-full shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full"
                                type="submit"
                                style="transition: all 0.15s ease 0s;"
                                >Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
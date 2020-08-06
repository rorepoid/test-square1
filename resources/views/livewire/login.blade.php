<div class="mx-full px-4 h-screen bg-gray-900">
    <div class="flex content-center items-center justify-center h-full">
        <div class="w-full lg:w-4/12 px-4">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0">
                <div class="rounded-t mb-0 px-6 py-6">
                    <div class="text-center mb-3">
                        <h6 class="text-gray-600 text-xl font-bold">Sign in with {{ config('app.name', 'Roa-P') }}</h6></div>
                    <hr class="mt-6 border-b-1 border-gray-400">
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <form wire:submit.prevent="submit">
                        <div class="relative w-full mb-3">
                            <label class="block uppercase text-gray-700 text-xs font-bold mb-2 select-none" for="email">Email</label>
                            <input type="email" wire:model="form.email"
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
                            <input type="password" wire:model="form.password"
                                class="shadow-md appearance-none border rounded-lg w-full py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="password"
                                placeholder="Password"
                                required
                                autofocus>
                            @error('form.password')
                                <span class="text-red-700">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="text-center mt-6">
                            <input
                                class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded-full shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full"
                                type="submit"
                                style="transition: all 0.15s ease 0s;"
                                value="Sign In">
                            </input>
                        </div>
                    </form>
                    <div class="flex flex-wrap mt-2">
                        <div class="w-full text-center"><a href="/register" class="text-black"><small>Create new account</small></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
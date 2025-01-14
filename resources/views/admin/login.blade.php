<x-layout.auth>
    <x-slot:title>
        Admin Login
    </x-slot:title>
    <form class="space-y-6" method="POST">
        @csrf
        <div>
            <label for="email" class="block text-sm/6 font-medium text-white">Email</label>
            <div class="mt-2">
                <input id="email" name="email" type="email" required
                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
            </div>
        </div>

        <div>
            <div class="flex items-center justify-between">
                <label for="password" class="block text-sm/6 font-medium text-white">Password</label>

            </div>
            <div class="mt-2">
                <input id="password" name="password" type="password" autocomplete="current-password" required
                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
            </div>
        </div>

        <div>
            <button type="submit"
                    class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Sign in
            </button>
        </div>
    </form>
</x-layout.auth>

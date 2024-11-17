<x-layout.auth>
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
    <x-slot:title>
        Register
    </x-slot:title>
    <form class="space-y-6" method="POST">
        @csrf
        <div>
            <label for="username" class="block text-sm/6 font-medium text-white">Username</label>
            <div class="mt-2">
                <input value="{{ old('username') }}" id="username" name="username" type="text" required
                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
            </div>
        </div>
        <div>
            <label for="name" class="block text-sm/6 font-medium text-white">Name</label>
            <div class="mt-2">
                <input value="{{ old('name') }}" id="name" name="name" type="text" required
                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
            </div>
        </div>
        <div>
            <label for="email" class="block text-sm/6 font-medium text-white">Email</label>
            <div class="mt-2">
                <input value="{{ old('email') }}" id="email" name="email" type="email" required
                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
            </div>
        </div>
        <div>
            <label for="nik" class="block text-sm/6 font-medium text-white">NIK</label>
            <div class="mt-2">
                <input value="{{ old('nik') }}" id="nik" name="nik" type="number" required
                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
            </div>
        </div>

        <div>
            <label for="tempat_lahir" class="block text-sm/6 font-medium text-white">Tempat Lahir</label>
            <div class="mt-2">
                <input value="{{ old('tempat_lahir') }}" id="tempat_lahir" name="tempat_lahir" type="text" required
                       class="block w-full rounded-md border-0 py-1.5 form-input text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
            </div>
        </div>

        <div>
            <label for="tanggal_lahir" class="block text-sm/6 font-medium text-white">Tanggal Lahir</label>
            <div class="mt-2">
                <input value="{{ old('tanggal_lahir') }}" id="tanggal_lahir" name="tanggal_lahir" type="date" required
                       class="block w-full rounded-md border-0 py-1.5 form-input text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
            </div>
        </div>
        <div>
            <label for="address" class="block text-sm/6 font-medium text-white">Alamat</label>
            <div class="mt-2">
                <textarea required name="address" id="address" cols="30" rows="10" class="block w-full form-textarea rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"></textarea>
            </div>
        </div>
        <div>
            <div class="flex items-center justify-between">
                <label for="password" class="block text-sm/6 font-medium text-white">Password</label>
            </div>
            <div class="mt-2">
                <input value="{{ old('password') }}" id="password" name="password" type="password" required
                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
            </div>
        </div>
        <div>
            <div class="flex items-center justify-between">
                <label for="password" class="block text-sm/6 font-medium text-white">Confirm Password</label>
            </div>
            <div class="mt-2">
                <input value="{{ old('password_confirmation') }}" id="confirm-password" name="password_confirmation" type="password" required
                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
            </div>
        </div>


        <div>
            <button type="submit"
                    class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Sign up
            </button>
        </div>
    </form>
</x-layout.auth>

@use('Illuminate\Support\Facades\Request')
<!doctype html>
<html lang="en" class="h-full bg-slate-900">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{ $title }}</title>
</head>
<body class="h-full">

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-16 w-auto" src="http://presensi-online.private/attendance.svg" alt="attendance Online">
        <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-white">{{ Request::is('login') ? 'Sign in to your account' : 'Create new account'}}</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        @if ( session('success') )
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                <span class="font-medium">{{ session('success') }}
            </div>
        @endif
        @if($errors->any())
            <div
                class="p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300"
                role="alert">
                <span class="font-medium">{{ $errors->first() }}</span>
            </div>
        @endif


        {{ $slot }}

        <p class="mt-10 text-center text-sm/6 text-gray-400">
            @if(Request::is('login'))
                Not a member?
                <a href="{{ url('sign-up') }}" class="font-semibold text-indigo-600 hover:text-indigo-500">Sign up</a>
            @else
                Have an account?
                <a href="{{ url('login') }}" class="font-semibold text-indigo-600 hover:text-indigo-500">Sign in</a>
            @endif

        </p>
    </div>
</div>


</body>
</html>

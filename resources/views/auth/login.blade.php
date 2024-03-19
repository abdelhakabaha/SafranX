<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Zafran</title>
</head>

<body>
    <!-- component -->
    <div class="w-full min-h-screen bg-gray-50 flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-no-repeat bg-cover"
        style="background-image: url('https://cdn.nwmgroups.hu/s/img/i/2310/20231015france-ubaye-valley-france-outside.jpg?w=800&h=533&t=5');">
        <div class="w-full sm:max-w-md p-5 mx-auto">
            @if (Session::has('error'))
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('error') }}
                </div>
            @endif



            <h2 class="mb-12 text-center text-5xl font-extrabold">Welcome.</h2>

            <form action="{{ route('auth.login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block mb-1" for="email">Email-Address</label>
                    <input id="email" type="text" name="email"
                        class="py-2 px-3 border border-gray-300 focus:border-red-300 focus:outline-none focus:ring focus:ring-red-200 focus:ring-opacity-50 rounded-md shadow-sm disabled:bg-gray-100 mt-1 block w-full" />
                    @error('email')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block mb-1" for="password">Password</label>
                    <input id="password" type="password" name="password"
                        class="py-2 px-3 border border-gray-300 focus:border-red-300 focus:outline-none focus:ring focus:ring-red-200 focus:ring-opacity-50 rounded-md shadow-sm disabled:bg-gray-100 mt-1 block w-full" />
                        @error('password')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6 flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="border border-gray-300 text-red-600 shadow-sm focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50" />
                        <label for="remember_me" class="ml-2 block text-sm leading-5 text-gray-900"> Remember me
                        </label>
                    </div>
                    <a href="#" class="text-sm"> Forgot your password? </a>
                </div>

                <div class="mt-6">
                    <button
                        class="w-full inline-flex items-center justify-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold capitalize text-white hover:bg-red-700 active:bg-red-700 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 disabled:opacity-25 transition">Sign
                        In</button>
                </div>
                <div class="mt-6 text-center">
                    <a href="#" class="underline">Sign up for an account</a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>

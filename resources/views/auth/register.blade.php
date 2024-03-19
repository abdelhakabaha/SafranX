<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>SafranX</title>
</head>

<body>

    <!-- component -->
    <!-- Create by joker banny -->

    <div class="h-screen bg-cover bg-center flex justify-center items-center"
        style="background-image: url('https://cdn.nwmgroups.hu/s/img/i/2310/20231015france-ubaye-valley-france-outside.jpg?w=800&h=533&t=5');">

        <div class="lg:w-2/5 md:w-1/2 w-2/3">


            <form class=" bg-opacity-50 p-10 rounded-lg shadow-lg min-w-full bg-white" action="{{ route('register') }}"
                method="POST">

                @if (Session::has('success'))
                    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md"
                        role="alert">
                        <div class="flex">
                            <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path
                                        d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                                </svg></div>
                            <div>
                                <p class="font-bold"> {{ session::get('success') }} </p>
                            </div>
                        </div>
                    </div>
                @endif

                <h1 class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">Rregister</h1>

                @csrf

                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="username">Username</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text"
                        name="name" id="username" placeholder="username" />
                    @error('name')
                        <div class="alert text-red-700 alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="email">Email</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text"
                        name="email" id="email" placeholder="@email" />
                    @error('email')
                        <div class="alert text-red-700 alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="password">Password</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="password"
                        name="password" id="password" placeholder="password" />
                    @error('password')
                        <div class="alert text-red-700 alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="confirm">Confirm
                        password</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="password"
                        name="password_confirmation" id="confirm" placeholder="confirm password" />
                    @error('password_confirmation')
                        <div class="alert text-red-700 alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mt-4">
                    {{-- <x-input-label :value="__('Role')" /> --}}
                    {{-- <div class="mt-1">
            <label class="inline-flex items-center">
                <input type="radio" class="form-radio" name="role" value="organizer">
                <span class="ml-2">Vendeur</span>
            </label>
            <label class="inline-flex items-center ml-6">
                <input type="radio" class="form-radio" name="role" value="user" checked>
                <span class="ml-2">Client</span>
            </label>
        </div> --}}
                    <button type="submit"
                        class="w-full mt-6 bg-indigo-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans">Register</button>
                </div>
            </form>

        </div>
    </div>

</html>
</body>

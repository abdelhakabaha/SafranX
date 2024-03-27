
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Zafran</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>



        <!-- component -->
<!-- This is an example component -->




    </head>

    <div class="w-full h-screen">
        <header class="bg-teal-400">
          <nav class="flex justify-between w-full bg-purple-500 text-white p-4">
            <a href="#"><span class=" font-semibold text-xl tracking-tight">SafranX</span></a>
              <div class="md:items-center md:w-auto flex">
                <div class="md:flex hidden">
                  <a class="block md:text-white mr-4" href="#">Home</a>
                  <a class="block md:text-white mr-4" href="#">About</a>
                  <a class="block md:text-white mr-4" href="#">Cansel d'utilisation</a>
                  <a class="block md:text-white mr-4" href="#">Contacte</a>
                </div>
                <div class="flex text-sm" v-else>
                    <a class="p-2 ml-2 bg-white text-teal-500 font-semibold leading-none border border-gray-100 rounded hover:border-transparent hover:bg-gray-100" href=" {{ route('auth.login' )}}">Logout</a>

                </div>
              </div>
          </nav>
        </header>
        <main class="flex justify-center items-center">
          <h1 class="text-3xl text-center">Welcome</h1>
        </main>
        <div class="bottomNav fixed bottom-0 w-full">
          <nav style="border:1px solid blue" class="md:hidden bottom-0 w-full bg-gray-700 text-xs">
            <ul class="flex justify-around items-center text-white text-center opacity-75 text-lg font-bold">
              <li class="p-4 hover:bg-gray-500">
                <a href="#">
                  <span>Link 1</span>
                  <svg class="h-6 w-6 fill-current mx-auto" viewBox="0 0 20 20">
                    <path d="M14 8a4 4 0 1 0-8 0v7h8V8zM8.027 2.332A6.003 6.003 0 0 0 4 8v6l-3 2v1h18v-1l-3-2V8a6.003 6.003 0 0 0-4.027-5.668 2 2 0 1 0-3.945 0zM12 18a2 2 0 1 1-4 0h4z" fill-rule="evenodd" />
                  </svg>
                 </a>
              </li>
              <li class="p-4 hover:bg-gray-500">
                <a href="#">
                  <span>Link 2</span>
                  <svg class="h-6 w-6 fill-current mx-auto" viewBox="0 0 20 20">
                    <path d="M14 8a4 4 0 1 0-8 0v7h8V8zM8.027 2.332A6.003 6.003 0 0 0 4 8v6l-3 2v1h18v-1l-3-2V8a6.003 6.003 0 0 0-4.027-5.668 2 2 0 1 0-3.945 0zM12 18a2 2 0 1 1-4 0h4z" fill-rule="evenodd" />
                  </svg>
                </a>
              </li>
              <li class="p-4 hover:bg-gray-500">
                <a href="#">
                  <span>Link 3</span>
                  <svg class="h-6 w-6 fill-current mx-auto" viewBox="0 0 20 20">
                    <path d="M14 8a4 4 0 1 0-8 0v7h8V8zM8.027 2.332A6.003 6.003 0 0 0 4 8v6l-3 2v1h18v-1l-3-2V8a6.003 6.003 0 0 0-4.027-5.668 2 2 0 1 0-3.945 0zM12 18a2 2 0 1 1-4 0h4z" fill-rule="evenodd" />
                  </svg>
                </a>
              </li>
              <li class="p-4 hover:bg-gray-500">
                <a href="#">
                  <span>Link 4</span>
                  <svg class="h-6 w-6 fill-current mx-auto" viewBox="0 0 20 20">
                    <path d="M14 8a4 4 0 1 0-8 0v7h8V8zM8.027 2.332A6.003 6.003 0 0 0 4 8v6l-3 2v1h18v-1l-3-2V8a6.003 6.003 0 0 0-4.027-5.668 2 2 0 1 0-3.945 0zM12 18a2 2 0 1 1-4 0h4z" fill-rule="evenodd" />
                  </svg>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    




        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>


        
    </body>
</html>

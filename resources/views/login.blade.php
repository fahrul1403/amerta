<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>AMERTA</title>
</head>

<body>

    <div class="bg-[#1c2434] p-4">
        <h1 class="text-center font-bold text-white">AMERTA</h1>
    </div>

    <div>

        <div class="w-full max-w-sm mx-auto mt-16 p-4 border border-gray-200 rounded-lg shadow sm:p-6 md:p-8">
            <form class="space-y-6" action="{{ route('login') }}" method="POST">
                @csrf
                <h5 class="text-2xl text-primary font-bold dark:text-white text-center">Login Form</h5>
                @if (session('error'))
                    <div class="text-red-500 text-sm">
                        {{ session('error') }}
                    </div>
                @endif
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                        email</label>
                    <input type="email" name="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="name@company.com" required />
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                        password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required />
                </div>
                <button type="submit"
                    class="w-full text-white bg-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login
                    to your account</button>
                <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                    Not registered? <a href="#" class="text-blue-700 hover:underline dark:text-blue-500">Create
                        account</a>
                </div>
            </form>
        </div>

    </div>
</body>

</html>

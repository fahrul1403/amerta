<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/css/app.css')
</head>
<body>

    
    <div class="">
        <h1 class="text-5xl font-bold text-center text-teal-700">Crud Laravel</h1>
    </div>
    <div class="w-full lg:max-w-2xl mx-auto px-5 mt-20">
        <div>
            <a href="{{route('user.index')}}" class="py-3 px-6  bg-primary rounded-lg text-white">Kembali</a>
        </div>


        <form  action="{{route('user.store')}}" class=" mx-auto mt-7"  method="POST">
            @csrf
        <div class="mb-5">
        <label for="name" class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
        <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="flowbite" />
        </div>
        <div class="mb-5">
        <label for="email" class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">Email</label>
        <input type="text" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com"  />
        </div>
        <div class="mb-5">
        <label for="password" class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">Password</label>
        <input type="text" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="********"  />
    </div>
    <div class="mb-5">
        <label for="level" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Level</label>
        <select id="level" name="level" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option >Pilih Level</option>
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>
    </div>
    
        <button type="submit" class="text-white bg-primary  font-medium rounded-lg text-sm  sm:w-auto px-6 py-3 text-center mt-7">Simpan</button>
    </form>
</div>
</body>
</html>
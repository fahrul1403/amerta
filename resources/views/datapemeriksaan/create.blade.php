<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AMERTA</title>

    @vite('resources/css/app.css')
</head>
<body>


    <div class="mt-10">
        <h1 class="text-5xl font-bold text-center text-teal-700">Input Data Pemeriksaan</h1>
    </div>
    <div class="w-full lg:max-w-2xl mx-auto px-5 mt-10">
        <div>
            <a href="{{ route('datapemeriksaan.index') }}" class="py-3 px-6  bg-primary rounded-lg text-white flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                    <g clip-path="url(#a)">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.25-7.25a.75.75 0 0 0 0-1.5H8.66l2.1-1.95a.75.75 0 1 0-1.02-1.1l-3.5 3.25a.75.75 0 0 0 0 1.1l3.5 3.25a.75.75 0 0 0 1.02-1.1l-2.1-1.95h4.59Z" clip-rule="evenodd" />
                    </g>
                    <defs>
                      <clipPath id="a">
                        <path d="M0 0h20v20H0z" />
                      </clipPath>
                    </defs>
                  </svg>

                Kembali</a>
        </div>

        <form action="{{ route('datapemeriksaan.store') }}" class="mx-auto mt-7" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-5">
                <label for="frekuensi" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Frekuensi</label>
                <input type="text" id="frekuensi" name="frekuensi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="frekuensi" required />
                @error('frekuensi')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="fileBuku" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">File Buku Ibu Hamil (jpg, png, pdf)</label>
                <input type="file" id="fileBuku" name="fileBuku" accept="jpeg, png, jpg, application/pdf" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                @error('fileBuku')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="text-white bg-primary font-medium rounded-lg text-sm sm:w-auto px-6 py-3 text-center mt-7">Simpan</button>
        </form>

    </div>
</body>
</html>

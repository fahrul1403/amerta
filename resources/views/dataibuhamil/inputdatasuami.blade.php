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
    <div class="p-4 bg-primary">
        <h1 class="text-5xl font-bold text-center text-gray-200">Input Penilaian Ibu Hamil</h1>
    </div>
    <div class="w-full lg:max-w-2xl mx-auto px-5 mt-5 p-4 ">
        <a href="{{ url('dashboard/admin/dataibuhamil') }}" class="py-3 px-3  bg-primary rounded-lg text-white flex items-center gap-2">
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
        <form class=" mx-auto mt-5" action="{{ route('dataibuhamil.update', $dataibuhamil->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-5">
                <label for="namaS" class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">Nama Suami</label>
                <input type="text" id="namaS" name="namaS"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="nama suami"  value="{{ $dataibuhamil->namaS }}" />
            </div>
            <div class="mb-5">
                <label for="nikS" class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">NIK</label>
                <input type="text" id="nikS" name="nikS"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="nik"  value="{{ $dataibuhamil->nikS }}" />
            </div>
            <div class="mb-5">
                <label for="golDarahS"
                    class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">Golongan Darah</label>
                <input type="text" id="golDarahS" name="golDarahS"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Golongan Darah"  value="{{ $dataibuhamil->golDarahS }}" />
            </div>
            <div class="mb-5">
                <label for="ttlS"
                    class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">Tempat & Tanggal Lahir</label>
                <input type="text" id="ttlS" name="ttlS"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Tempat & Tanggal Lahir"  value="{{ $dataibuhamil->ttlS }}" />
            </div>
            <div class="mb-5">
                <label for="pendidikanS"
                    class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">Pendidikan</label>
                <input type="text" id="pendidikanS" name="pendidikanS"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="pendidikan"  value="{{ $dataibuhamil->pendidikanS }}" />
            </div>
            <div class="mb-5">
                <label for="pekerjaanS"
                    class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">Pekerjaan</label>
                <input type="text" id="pekerjaanS" name="pekerjaanS"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="pekerjaan"  value="{{ $dataibuhamil->pekerjaanS }}" />
            </div>
            <div class="mb-5">
                <label for="alamatRumahS"
                    class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">Alamat Rumah</label>
                <input type="text" id="alamatRumahS" name="alamatRumahS"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Alamat Rumah"  value="{{ $dataibuhamil->alamatRumahS }}" />
            </div>
            <div class="mb-5">
                <label for="noHPS"
                    class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">No. Whatsapp</label>
                <input type="text" id="noHPS" name="noHPS"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="No. Whatsapp"  value="{{ $dataibuhamil->noHPS }}" />
            </div>
            <button type="submit"
                class="text-white bg-primary  font-medium rounded-lg text-sm  sm:w-auto px-6 py-3 text-center mt-7">Simpan</button>

        </form>
    </div>
</body>

</html>

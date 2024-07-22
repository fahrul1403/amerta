<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Posyandu</title>

    @vite('resources/css/app.css')
</head>
<body>


    <div class="mt-10">
        <h1 class="text-5xl font-bold text-center text-teal-700 ">Input Data Diri Ibu Hamil</h1>
    </div>
    <div class="w-full lg:max-w-2xl mx-auto px-5 mt-10">
        <a href="{{ route('dataibuhamil.index') }}" class="py-3 px-6  bg-primary rounded-lg text-white flex items-center gap-2">
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

        <form  action="{{route('dataibuhamil.store')}}" class=" mx-auto mt-7"  method="POST">
            @csrf
        <div class="mb-5">
        <label for="nama" class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">Nama Ibu Hamil</label>
        <input type="text" id="nama" name="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama Ibu Hamil"  />
        </div>
        <div class="mb-5">
        <label for="nik" class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">NIK</label>
        <input type="text" id="nik" name="nik" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="NIK" />
        </div>
        <div class="mb-5">
        <label for="golDarah" class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">Golongan Darah</label>
        <input type="text" id="golDarah" name="golDarah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Golongan Darah"  />
        </div>
        <div class="mb-5">
        <label for="ttl" class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">Tempat & Tanggal Lahir</label>
        <input type="date" id="ttl" name="ttl" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tempat & Tanggal Lahir"  />
        </div>
        <div class="mb-5">
        <label for="pendidikan" class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">Pendidikan</label>
        <input type="text" id="pendidikan" name="pendidikan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pendidikan"  />
        </div>
        <div class="mb-5">
        <label for="pekerjaan" class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">Pekerjaan</label>
        <input type="text" id="pekerjaan" name="pekerjaan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pekerjaan"  />
        </div>
        <div class="mb-5">
        <label for="alamatRumah" class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">Alamat Rumah</label>
        <input type="text" id="alamatRumah" name="alamatRumah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Alamat Rumah"  />
        </div>
        <div class="mb-5">
        <label for="noHP" class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">No. WhatsApp</label>
        <input type="text" id="noHP" name="noHP" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="No. WhatsApp"  />
        </div>
        <h1 class="mb-5">DATA SUAMI</h1>
        <div class="mb-5">
            <label for="namaS" class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">Nama Suami</label>
            <input type="text" id="namaS" name="namaS"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="nama suami"/>
        </div>
        <div class="mb-5">
            <label for="nikS" class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">NIK</label>
            <input type="text" id="nikS" name="nikS"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="nik"/>
        </div>
        <div class="mb-5">
            <label for="golDarahS"
                class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">Golongan Darah</label>
            <input type="text" id="golDarahS" name="golDarahS"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Golongan Darah"/>
        </div>
        <div class="mb-5">
            <label for="ttlS"
                class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">Tempat & Tanggal Lahir</label>
            <input type="text" id="ttlS" name="ttlS"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Tempat & Tanggal Lahir"/>
        </div>
        <div class="mb-5">
            <label for="pendidikanS"
                class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">Pendidikan</label>
            <input type="text" id="pendidikanS" name="pendidikanS"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="pendidikan"/>
        </div>
        <div class="mb-5">
            <label for="pekerjaanS"
                class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">Pekerjaan</label>
            <input type="text" id="pekerjaanS" name="pekerjaanS"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="pekerjaan"/>
        </div>
        <div class="mb-5">
            <label for="alamatRumahS"
                class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">Alamat Rumah</label>
            <input type="text" id="alamatRumahS" name="alamatRumahS"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Alamat Rumah"/>
        </div>
        <div class="mb-5">
            <label for="noHPS"
                class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">No. Whatsapp</label>
            <input type="text" id="noHPS" name="noHPS"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="No. Whatsapp"/>
        </div>
        <button type="submit" class="text-white bg-primary  font-medium rounded-lg text-sm  sm:w-auto px-6 py-3 text-center mt-5 mb-10">Simpan</button>
    </form>
</div>
</body>
</html>

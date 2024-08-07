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
    <div class="p-4 bg-primary">
        <h1 class="text-2xl font-bold text-center text-gray-200">Detail Surat Masuk</h1>
    </div>
    <div class="w-full lg:max-w-2xl mx-auto px-5 mt-20 p-4 ">
        <a href="{{ route('datapenilaian.index') }}" class="py-3 px-6  bg-primary rounded-lg text-white flex items-center gap-2">
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
        <form class=" mx-auto mt-7" action="{{ route('datapenilaian.update', $datapenilaian->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-5">
                <label for="nim" class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">No Surat Keluar</label>
                <input type="text" id="no_datapenilaian" name="no_datapenilaian"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="name@flowbite.com" disabled value="{{ $datapenilaian->no_datapenilaian }}"  />
            </div>
            <div class="mb-5">
                <label for="nim" class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">No Keluar</label>
                <input type="text" id="no_keluar" name="no_keluar"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="name@flowbite.com" disabled value="{{ $datapenilaian->no_keluar }}" />
            </div>
            <div class="mb-5">
                <label for="nim" class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">Kode Klasifikasi</label>
                <input type="text" id="klasifikasi_surat" name="klasifikasi_surat"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="name@flowbite.com" disabled value="{{ $datapenilaian->klasifikasi_surat }}" />
            </div>
            <div class="mb-5">
                <label for="perihal_surat"
                    class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">Perihal Surat</label>
                <input type="text" id="perihal_surat" name="perihal_surat"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="name@flowbite.com" disabled value="{{ $datapenilaian->perihal_surat }}" />
            </div>
            <div class="mb-5">
                <label for="tujuan_surat"
                    class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">Tujuan Surat</label>
                <input type="text" id="tujuan_surat" name="tujuan_surat"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="name@flowbite.com" disabled value="{{ $datapenilaian->tujuan_surat }}" />
            </div>
            <div class="mb-5">
                <label for="tgl_surat"
                    class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">Tanggal Surat</label>
                <input type="date" id="tgl_surat" name="tgl_surat"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="name@flowbite.com" disabled value="{{ $datapenilaian->tgl_surat }}" />
            </div>
            <div class="mb-5">
                <label for="tgl_diterima"
                    class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">Tanggal Diterima</label>
                <input type="date" id="tgl_diterima" name="tgl_diterima"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="name@flowbite.com" disabled value="{{ $datapenilaian->tgl_diterima }}" />
            </div>
            <div class="mb-5">
                <label for="file_surat"
                    class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">File Surat Masuk</label>
                <input type="text" id="file_surat" name="file_surat"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="name@flowbite.com" disabled value="{{ $datapenilaian->file_surat }}" />
            </div><div class="mb-5">
                <label for="ketereangan"
                    class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">Keterangan Surat Masuk</label>
                <input type="text" id="keterangan" name="keterangan"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="name@flowbite.com" disabled value="{{ $datapenilaian->keterangan }}" />
            </div>
           
        </form>
    </div>
</body>

</html>

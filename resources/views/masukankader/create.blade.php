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
            <a href="{{route('datapenilaian.index')}}" class="py-3 px-6  bg-primary rounded-lg text-white">Data Surat Keluar</a>
        </div>

        <form  action="{{route('datapenilaian.store')}}" class=" mx-auto mt-7"  method="POST">
            @csrf
        <div class="mb-5">
        <label for="no_datapenilaian" class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">No Surat Keluar</label>
        <input type="text" id="no_datapenilaian" name="no_datapenilaian" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="no surat masuk" />
        </div>
        <div class="mb-5">
        <label for="no_keluar" class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">No Agenda Surat Keluar</label>
        <input type="text" id="no_keluar" name="no_keluar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="no surat masuk" />
        </div>
        <div class="mb-5">
            <label for="tujuan_surat" class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">Tujuan Surat</label>
            <input type="text" id="tujuan_surat" name="tujuan_surat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="asal surat"  />
            </div>
        <div class="mb-5">
        <label for="perihal_surat" class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">Isi Ringkas</label>
        <input type="text" id="perihal_surat" name="perihal_surat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="no agenda" />
        </div>
        <div class="mb-5">
        <label for="keterangan" class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
        <input type="text" id="keterangan" name="keterangan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="no agenda" />
        </div>
        <div class="mb-5">
        <label for="klasifikasi_surat" class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">Klasifikasi Surat</label>
        <input type="text" id="klasifikasi_surat" name="klasifikasi_surat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="no agenda" />
        </div>
        <div class="mb-5">
            <label for="tgl_surat" class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">Tanggal Surat</label>
            <input type="date" id="tgl_surat" name="tgl_surat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="tanggal diterima"  />
            </div>
            <div class="mb-5">
            <label for="tgl_diterima" class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">Tanggal Diterima</label>
            <input type="date" id="tgl_diterima" name="tgl_diterima" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="tanggal diterima"  />
            </div>
            <div class="mb-5">
                <label for="file_surat" class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">File Surat</label>
                <input type="text" id="file_surat" name="file_surat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="no agenda" />
                </div>
        <button type="submit" class="text-white bg-primary  font-medium rounded-lg text-sm  sm:w-auto px-6 py-3 text-center mt-7">Simpan</button>
    </form>
</div>
</body>
</html>
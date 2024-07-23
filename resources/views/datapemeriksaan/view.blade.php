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
        <h1 class="text-2xl font-bold text-center text-gray-200">Detail Data Ibu Hamil</h1>
    </div>
    <div class="w-full lg:max-w-2xl mx-auto px-5 mt-20 p-4 ">
        <a href="{{ url('dashboard/admin/dataibuhamil') }}"
            class="py-3 px-6  bg-primary rounded-lg text-white flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                <g clip-path="url(#a)">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.25-7.25a.75.75 0 0 0 0-1.5H8.66l2.1-1.95a.75.75 0 1 0-1.02-1.1l-3.5 3.25a.75.75 0 0 0 0 1.1l3.5 3.25a.75.75 0 0 0 1.02-1.1l-2.1-1.95h4.59Z"
                        clip-rule="evenodd" />
                </g>
                <defs>
                    <clipPath id="a">
                        <path d="M0 0h20v20H0z" />
                    </clipPath>
                </defs>
            </svg>

            Kembali</a>
        <form id="husbandForm" class="mx-auto mt-7" action="{{ route('dataibuhamil.store') }}" method="POST">
            @csrf
            <div class="mb-5">
                <label for="hpht" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">HPHT</label>
                <input disabled type="date" id="hpht" name="hpht" value="{{ $dataibuhamil->hpht }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>

            <div class="mb-5">
                <label for="tanggal_periksa"
                    class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Tanggal Periksa</label>
                <input disabled type="date" id="tanggal_periksa" name="tanggal_periksa"
                    {{ $dataibuhamil->tanggal_periksa }}
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>
            <div class="mb-5">
                <label for="usia_kehamilan" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Usia
                    Kehamilan (minggu)</label>
                <input disabled type="number" id="usia_kehamilan" name="usia_kehamilan"
                    value="{{ $dataibuhamil->usia_kehamilan }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Usia Kehamilan" />
            </div>
            <div class="mb-5">
                <label for="tempat_periksa" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Tempat
                    Periksa (Lokasi)</label>
                <input disabled type="text" id="tempat_periksa" name="tempat_periksa"
                    value="{{ $dataibuhamil->tempat_periksa }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Tempat Periksa" />
            </div>
            <div class="mb-5">
                <label for="berat_badan" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Berat
                    Badan (kg)</label>
                <input disabled type="number" id="berat_badan" name="berat_badan"
                    value="{{ $dataibuhamil->berat_badan }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Berat Badan" />
            </div>
            <div class="mb-5">
                <label for="tinggi_badan"
                    class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Pengukuran Tinggi Badan
                    (cm)</label>
                <input disabled type="number" id="tinggi_badan" name="tinggi_badan"
                    value="{{ $dataibuhamil->tinggi_badan }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Tinggi Badan" />
            </div>
            <div class="mb-5">
                <label for="lila" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Lila
                    (cm)</label>
                <input disabled type="number" id="lila" name="lila" value="{{ $dataibuhamil->lila }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Lila" />
            </div>
            <div class="mb-5">
                <label for="tekanan_darah" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Tekanan
                    Darah/Tensi (mmHg)</label>
                <input disabled type="text" id="tekanan_darah" name="tekanan_darah"
                    value="{{ $dataibuhamil->tekanan_darah }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Tekanan Darah" />
            </div>

            <div class="mb-5">
                <label for="gerak_anak" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Gerakan
                    Anak</label>
                <input disabled type="text" id="gerak_anak" name="gerak_anak"
                    value="{{ $dataibuhamil->gerak_anak }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Gerak Anak" />
            </div>
            <!-- Tambahkan elemen-elemen data suami yang lain di sini -->
            {{-- <div class="flex justify-center mt-4">
                    <button type="submit" class="py-3 px-6 bg-primary rounded-lg text-white">Simpan</button>
                </div> --}}
        </form>
    </div>
    <script>
        // JavaScript untuk menampilkan/menyembunyikan form suami saat tombol "Nama Suami" diklik
        document.getElementById("showHusbandForm").addEventListener("click", function() {
            document.getElementById("husbandForm").classList.toggle("hidden");

            // Scroll ke atas form nama suami
            document.getElementById("husbandForm").scrollIntoView({
                behavior: "smooth", // Animasi smooth scroll
                block: "start" // Mengarahkan scroll ke bagian atas elemen
            });
        });
    </script>

</body>

</html>

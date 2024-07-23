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
    <div class="w-full lg:max-w-2xl mx-auto px-5 mt-5 p-4">
        <a href="{{ url('dashboard/admin/dataibuhamil') }}"
            class="py-3 px-3 bg-primary rounded-lg text-white flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                <g clip-path="url(#a)">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.25-7.25a.75.75 0 0 0 0-1.5H8.66l2.1-1.95a.75.75 0 1 0-1.02-1.1l-3.5 3.25a.75.75 0 0 0 0 1.1l-3.5 3.25a.75.75 0 0 0 1.02-1.1l-2.1-1.95h4.59Z"
                        clip-rule="evenodd" />
                </g>
                <defs>
                    <clipPath id="a">
                        <path d="M0 0h20v20H0z" />
                    </clipPath>
                </defs>
            </svg>
            Kembali</a>
        <form class="mx-auto mt-5" action="{{ route('dataibuhamil.store_penilaian', $ibuHamil->id) }}" method="POST">
            @csrf
            <input type="text" name="nama" value="{{ $ibuHamil->nama }}">
            <input type="text" name="nik" value="{{ $ibuHamil->nik }}">

            <div class="mb-5">
                <label for="hpht" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">HPHT</label>
                <input type="date" id="hpht" name="hpht"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>

            <div class="mb-5">
                <label for="tanggal_periksa"
                    class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Tanggal Periksa</label>
                <input type="date" id="tanggal_periksa" name="tanggal_periksa"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>
            <div class="mb-5">
                <label for="usia_kehamilan" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Usia
                    Kehamilan (minggu)</label>
                <input type="number" id="usia_kehamilan" name="usia_kehamilan"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Usia Kehamilan" />
            </div>
            <div class="mb-5">
                <label for="tempat_periksa" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Tempat
                    Periksa (Lokasi)</label>
                <input type="text" id="tempat_periksa" name="tempat_periksa"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Tempat Periksa" />
            </div>
            <div class="mb-5">
                <label for="berat_badan" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Berat
                    Badan (kg)</label>
                <input type="number" id="berat_badan" name="berat_badan"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Berat Badan" />
            </div>
            <div class="mb-5">
                <label for="tinggi_badan"
                    class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Pengukuran Tinggi Badan
                    (cm)</label>
                <input type="number" id="tinggi_badan" name="tinggi_badan"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Tinggi Badan" />
            </div>
            <div class="mb-5">
                <label for="lila" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Lila
                    (cm)</label>
                <input type="number" id="lila" name="lila"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Lila" />
            </div>
            <div class="mb-5">
                <label for="tekanan_darah" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Tekanan
                    Darah/Tensi (mmHg)</label>
                <input type="text" id="tekanan_darah" name="tekanan_darah"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Tekanan Darah" />
            </div>

            <div class="mb-5">
                <label for="gerak_anak" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Gerakan
                    Anak</label>
                <input type="text" id="gerak_anak" name="gerak_anak"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Gerak Anak" />
            </div>

            <button type="submit"
                class="text-white bg-primary font-medium rounded-lg text-sm sm:w-auto px-6 py-3 text-center mt-7">Simpan</button>
        </form>
    </div>
</body>
<script>
    document.getElementById('hpht').addEventListener('change', calculateUsiaKehamilan);
    document.getElementById('tanggal_periksa').addEventListener('change', calculateUsiaKehamilan);

    function calculateUsiaKehamilan() {
        const hpht = document.getElementById('hpht').value;
        const tanggalPeriksa = document.getElementById('tanggal_periksa').value;

        if (hpht && tanggalPeriksa) {
            const hphtDate = new Date(hpht);
            const periksaDate = new Date(tanggalPeriksa);
            const timeDifference = periksaDate - hphtDate;
            const daysDifference = timeDifference / (1000 * 3600 * 24);
            const weeksDifference = Math.floor(daysDifference / 7);

            document.getElementById('usia_kehamilan').value = weeksDifference;
        }
    }
</script>

</html>

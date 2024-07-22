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
        <a href="{{ url('dashboard/admin/dataibuhamil') }}" class="py-3 px-3 bg-primary rounded-lg text-white flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                <g clip-path="url(#a)">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.25-7.25a.75.75 0 0 0 0-1.5H8.66l2.1-1.95a.75.75 0 1 0-1.02-1.1l-3.5 3.25a.75.75 0 0 0 0 1.1l-3.5 3.25a.75.75 0 0 0 1.02-1.1l-2.1-1.95h4.59Z" clip-rule="evenodd" />
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
                <label for="hpht" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">HPHT (Tanggal) - Rumus usia kehamilan berdasarkan HPHT</label>
                <input type="date" id="hpht" name="hpht"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>
            <div class="mb-5">
                <label for="usia_kehamilan" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Usia Kehamilan (bulan)</label>
                <input type="number" id="usia_kehamilan" name="usia_kehamilan"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Usia Kehamilan" />
            </div>
            <div class="mb-5">
                <label for="tempat_periksa" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Tempat Periksa (Lokasi)</label>
                <input type="text" id="tempat_periksa" name="tempat_periksa"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Tempat Periksa" />
            </div>
            <div class="mb-5">
                <label for="berat_badan" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Berat Badan (KG)</label>
                <input type="number" id="berat_badan" name="berat_badan"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Berat Badan" />
            </div>
            <div class="mb-5">
                <label for="tinggi_badan" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Pengukuran Tinggi Badan (CM)</label>
                <input type="number" id="tinggi_badan" name="tinggi_badan"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Tinggi Badan" />
            </div>
            <div class="mb-5">
                <label for="lila" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Lila (CM)</label>
                <input type="number" id="lila" name="lila"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Lila" />
            </div>
            <div class="mb-5">
                <label for="tekanan_darah" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Tekanan Darah (MMHG)</label>
                <input type="text" id="tekanan_darah" name="tekanan_darah"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Tekanan Darah" />
            </div>
            <div class="mb-5">
                <label for="tfu" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">TFU (CM)</label>
                <input type="number" id="tfu" name="tfu"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="TFU" />
            </div>
            <div class="mb-5">
                <label for="letak_djj" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Periksa Letak (Text Input) dan DJJ (Angka x permenit)</label>
                <input type="text" id="letak" name="letak"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Periksa Letak" />
                <input type="number" id="djj" name="djj"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 mt-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="DJJ (x permenit)" />
            </div>
            <div class="mb-5">
                <label for="status_imunisasi" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Status dan Imunisasi tetanus TT 1, TT 2 - TT 5</label>
                <input type="text" id="status_imunisasi" name="status_imunisasi"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Status Imunisasi" />
            </div>
            <div class="mb-5">
                <label for="konseling" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Konseling</label>
                <input type="text" id="konseling" name="konseling"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Konseling" />
            </div>
            <div class="mb-5">
                <label for="ttd" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">TTD (Ya / Tidak)</label>
                <select id="ttd" name="ttd"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                </select>
            </div>
            <div class="mb-5">
                <label for="ppia_hiv" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">PPIA - HIV</label>
                <select id="ppia_hiv" name="ppia_hiv"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="Positif">Positif</option>
                    <option value="Negatif">Negatif</option>
                </select>
            </div>
            <div class="mb-5">
                <label for="ppia_sifilis" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">PPIA - Sifilis</label>
                <select id="ppia_sifilis" name="ppia_sifilis"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="Positif">Positif</option>
                    <option value="Negatif">Negatif</select>
            </div>
            <div class="mb-5">
                <label for="ppia_hepatitis_b" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">PPIA - Hepatitis B</label>
                <select id="ppia_hepatitis_b" name="ppia_hepatitis_b"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="Positif">Positif</option>
                    <option value="Negatif">Negatif</option>
                </select>
            </div>
            <div class="mb-5">
                <label for="tata_laksana_kasus" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Tata Laksana Kasus</label>
                <input type="text" id="tata_laksana_kasus" name="tata_laksana_kasus"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Tata Laksana Kasus" />
            </div>
            <button type="submit" class="text-white bg-primary font-medium rounded-lg text-sm sm:w-auto px-6 py-3 text-center mt-7">Simpan</button>
        </form>
    </div>
</body>

</html>

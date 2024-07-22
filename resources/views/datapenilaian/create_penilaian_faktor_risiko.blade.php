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
        <h1 class="text-5xl font-bold text-center text-gray-200">Penilaian Faktor Risiko Ibu Hamil</h1>
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
        <form class="mx-auto mt-5" action="{{ route('penilaian.faktor_risiko.store') }}" method="POST">
            @csrf
            <!-- Question 0 -->
            <input type="hidden" name="skor_awal" value="2">

            <!-- Question 1 -->
            <div class="mb-5">
                <label class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">1. Terlalu muda hamil (<= 16 th)</label>
                <select name="terlalu_muda" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2">
                    <option value="0">Tidak</option>
                    <option value="4">Ya</option>
                </select>
            </div>

            <!-- Question 2 -->
            <div class="mb-5">
                <label class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">2. Terlalu tua hamil (>= 35 th)</label>
                <select name="terlalu_tua" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2">
                    <option value="0">Tidak</option>
                    <option value="4">Ya</option>
                </select>
            </div>

            <!-- Question 3 -->
            <div class="mb-5">
                <label class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">3. Terlalu lama hamil lagi (>= 10 th)</label>
                <select name="terlalu_lama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2">
                    <option value="0">Tidak</option>
                    <option value="4">Ya</option>
                </select>
            </div>

            <!-- Question 4 -->
            <div class="mb-5">
                <label class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">4. Terlalu cepat hamil lagi (< 2 th)</label>
                <select name="terlalu_cepat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2">
                    <option value="0">Tidak</option>
                    <option value="4">Ya</option>
                </select>
            </div>

            <!-- Question 5 -->
            <div class="mb-5">
                <label class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">5. Terlalu banyak anak, 4 atau lebih</label>
                <select name="terlalu_banyak_anak" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2">
                    <option value="0">Tidak</option>
                    <option value="4">Ya</option>
                </select>
            </div>

            <!-- Question 6 -->
            <div class="mb-5">
                <label class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">6. Terlalu pendek (<= 145 cm)</label>
                <select name="terlalu_pendek" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2">
                    <option value="0">Tidak</option>
                    <option value="4">Ya</option>
                </select>
            </div>

            <!-- Question 7 -->
            <div class="mb-5">
                <label class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">7. Pernah gagal kehamilan</label>
                <select name="gagal_kehamilan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2">
                    <option value="0">Tidak</option>
                    <option value="4">Ya</option>
                </select>
            </div>

            <!-- Question 8 -->
            <div class="mb-5">
                <label class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">8. Pernah melahirkan dengan Tarikan Tang / Vakum</label>
                <select name="melahirkan_vakum" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2">
                    <option value="0">Tidak</option>
                    <option value="4">Ya</option>
                </select>
            </div>

            <!-- Question 9 -->
            <div class="mb-5">
                <label class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">9. Pernah melahirkan dengan Uri dirogoh</label>
                <select name="uri_dirogoh" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2">
                    <option value="0">Tidak</option>
                    <option value="4">Ya</option>
                </select>
            </div>

            <!-- Question 10 -->
            <div class="mb-5">
                <label class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">10. Pernah melahirkan dengan Diberi Infus/Transfusi</label>
                <select name="infus_transfusi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2">
                    <option value="0">Tidak</option>
                    <option value="4">Ya</option>
                </select>
            </div>

            <!-- Question 11 -->
            <div class="mb-5">
                <label class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">11. Penyakit pada ibu hamil</label>
                <div class="flex flex-wrap gap-3">
                    <div>
                        <label for="penyakit_kurang_darah" class="block text-sm font-medium text-gray-900 dark:text-white">Kurang Darah</label>
                        <select id="penyakit_kurang_darah" name="penyakit_kurang_darah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2">
                            <option value="0">Tidak</option>
                            <option value="4">Ya</option>
                        </select>
                    </div>
                    <div>
                        <label for="penyakit_malaria" class="block text-sm font-medium text-gray-900 dark:text-white">Malaria</label>
                        <select id="penyakit_malaria" name="penyakit_malaria" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2">
                            <option value="0">Tidak</option>
                            <option value="4">Ya</option>
                        </select>
                    </div>
                    <div>
                        <label for="penyakit_tbc_paru" class="block text-sm font-medium text-gray-900 dark:text-white">TBC Paru</label>
                        <select id="penyakit_tbc_paru" name="penyakit_tbc_paru" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2">
                            <option value="0">Tidak</option>
                            <option value="4">Ya</option>
                        </select>
                    </div>
                    <div>
                        <label for="penyakit_payah_jantung" class="block text-sm font-medium text-gray-900 dark:text-white">Payah Jantung</label>
                        <select id="penyakit_payah_jantung" name="penyakit_payah_jantung" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2">
                            <option value="0">Tidak</option>
                            <option value="4">Ya</option>
                        </select>
                    </div>
                    <div>
                        <label for="penyakit_kencing_manis" class="block text-sm font-medium text-gray-900 dark:text-white">Kencing Manis (Diabetes)</label>
                        <select id="penyakit_kencing_manis" name="penyakit_kencing_manis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2">
                            <option value="0">Tidak</option>
                            <option value="4">Ya</option>
                        </select>
                    </div>
                    <div>
                        <label for="penyakit_menular_seksual" class="block text-sm font-medium text-gray-900 dark:text-white">Penyakit Menular Seksual</label>
                        <select id="penyakit_menular_seksual" name="penyakit_menular_seksual" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2">
                            <option value="0">Tidak</option>
                            <option value="4">Ya</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Question 12 -->
            <div class="mb-5">
                <label class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">12. Bengkak pada muka dan tungkai serta tekanan darah tinggi</label>
                <select name="bengkak_darah_tinggi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2">
                    <option value="0">Tidak</option>
                    <option value="4">Ya</option>
                </select>
            </div>

            <!-- Question 13 -->
            <div class="mb-5">
                <label class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">13. Hamil kembar 2 atau lebih</label>
                <select name="hamil_kembar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2">
                    <option value="0">Tidak</option>
                    <option value="4">Ya</option>
                </select>
            </div>

            <!-- Question 14 -->
            <div class="mb-5">
                <label class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">14. Hamil Kembar Air (Hydramnion)</label>
                <select name="hamil_kembar_air" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2">
                    <option value="0">Tidak</option>
                    <option value="4">Ya</option>
                </select>
            </div>

            <!-- Question 15 -->
            <div class="mb-5">
                <label class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">15. Bayi mati dalam kandungan</label>
                <select name="bayi_mati_kandungan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2">
                    <option value="0">Tidak</option>
                    <option value="4">Ya</option>
                </select>
            </div>

            <!-- Question 16 -->
            <div class="mb-5">
                <label class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">16. Kehamilan lebih bulan</label>
                <select name="kehamilan_lebih_bulan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2">
                    <option value="0">Tidak</option>
                    <option value="4">Ya</option>
                </select>
            </div>

            <!-- Question 17 -->
            <div class="mb-5">
                <label class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">17. Letak sungsang</label>
                <select name="letak_sungsang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2">
                    <option value="0">Tidak</option>
                    <option value="8">Ya</option>
                </select>
            </div>

            <!-- Question 18 -->
            <div class="mb-5">
                <label class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">18. Letak lintang</label>
                <select name="letak_lintang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2">
                    <option value="0">Tidak</option>
                    <option value="8">Ya</option>
                </select>
            </div>

            <!-- Question 19 -->
            <div class="mb-5">
                <label class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">19. Perdarahan dalam kehamilan ini</label>
                <select name="perdarahan_kehamilan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2">
                    <option value="0">Tidak</option>
                    <option value="8">Ya</option>
                </select>
            </div>

            <!-- Question 20 -->
            <div class="mb-5">
                <label class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">20. Pre-eklampsia berat / kejang-kejang</label>
                <select name="pre_eklampsia" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2">
                    <option value="0">Tidak</option>
                    <option value="8">Ya</option>
                </select>
            </div>

            <button type="submit" class="text-white bg-primary font-medium rounded-lg text-sm sm:w-auto px-6 py-3 text-center mt-7">Simpan</button>
        </form>
    </div>
</body>

</html>

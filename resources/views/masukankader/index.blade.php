<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    {{-- Animate Css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


    @vite('resources/css/app.css')
    @vite(['resources/css/app.css','resources/js/app.js'])
    @include('include.style')

</head>

<body>
    <!-- {{-- Sidebars --}} -->
    @include('include.sidebarss')
    <!-- {{-- Akhir Sidebars --}} -->

    @section('success')
    @show
    @include('include.headers')
    <div class="w-full lg:max-w-4xl lg:ml-72 lg:px-5 mt-7 relative ">
        {{-- Toast Notification --}}
        @if (session()->has('success'))
        <div id="toast-success" class="absolute flex justify-end right-0 items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800 animate__animated animate__bounceInRight" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                </svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="ms-3 text-sm font-normal">{{ session()->get('success')}}</div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
        @endif




        <div class="p-2 bg-[#1c2434] rounded-lg mt-5">
            <h1 class="font-bold text-white text-3xl ">
                MASUKAN KADER
            </h1>
        </div>

        {{-- Modal --}}


        {{-- Akhir Modal --}}

        {{-- Tambah Data --}}
        <br>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full">


            {{-- Table --}}
            <table class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 text-center w-full mb-3 ">
                <thead class="text-xs text-gray-200 uppercase bg-[#1c2434] dark:bg-gray-700 dark:text-gray-400 ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center justify-center">
                                Ibu Hamil - Cinderela
                                <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg></a>
                            </div>
                        </th>
                        </th>

                        {{-- <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th> --}}
                    </tr>
                </thead>
                <tbody class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 text-left">
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 text-left w-full">
                        <th>
                            <div class="p-4"> <!-- Tambahkan class p-4 untuk memberikan jarak tepi -->
                                <h3>Hasil Tes dan Pemeriksaan:</h3>
                                <ul>
                                    <li>Tes darah menunjukkan tingkat nutrisi dan zat penting yang optimal bagi pertumbuhan janin.</li>
                                    <li>Pemeriksaan ultrasonografi menegaskan perkembangan janin yang sehat dan normal.</li>
                                    <li>Evaluasi rutin terhadap tekanan darah, gula darah, dan fungsi organ-organ vital menunjukkan parameter-parameter yang stabil dan sesuai dengan standar kesehatan yang diharapkan selama masa kehamilan.</li>
                                </ul>

                                <h3>Rekomendasi:</h3>
                                <ul>
                                    <li>Tetap mempertahankan gaya hidup sehat.</li>
                                    <li>Mengikuti jadwal pemeriksaan rutin yang telah ditentukan.</li>
                                    <li>Menjaga konsistensi dalam mengonsumsi suplemen prenatal yang diresepkan.</li>
                                </ul>

                                <h3>Dukungan Tambahan:</h3>
                                <p>Siap memberikan dukungan dan bimbingan tambahan yang diperlukan untuk memastikan kesehatan ibu dan janin tetap terjaga dengan baik sepanjang perjalanan kehamilan ini.</p>
                            </div>
                        </th>
                    </tr>
                </tbody>


            </table>
        </div>

    </div>

</body>

</html>
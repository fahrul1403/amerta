<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


      {{-- Animate Css --}}
      <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />


    @vite('resources/css/app.css')
    @vite(['resources/css/app.css','resources/js/app.js'])
    @include('include.style')

</head>

<body>

    @include('include.sidebars')


    {{-- Sidebars --}}

    {{-- Akhir Sidebars --}}


    @section('success')

    @show

    @include('include.headers')
    <div class="w-full lg:max-w-4xl lg:ml-72 lg:px-5 mt-7 relative">
                  {{-- Toast Notification --}}
                  @if (session()->has('success'))
                  <div id="toast-success" class="absolute flex justify-end right-0 items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800 animate__animated animate__bounceInRight" role="alert">
                      <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                          </svg>
                          <span class="sr-only">Check icon</span>
                      </div>
                      <div class="ms-3 text-sm font-normal">{{ session()->get('success')}}</div>
                      <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
                          <span class="sr-only">Close</span>
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                          </svg>
                      </button>
                  </div>
                  @endif




        <div class="p-2 bg-[#1c2434] rounded-lg mt-5">
            <h1 class="font-bold text-white text-3xl ">
                LIST PENILAIAN IBU HAMIL
            </h1>
        </div>

        {{-- Modal --}}


        {{-- Akhir Modal --}}

        {{-- Tambah Data --}}
        <div class="mt-7 mb-5 flex items-center justify-between bg-gray-200 p-2 rounded-lg relative ">
            <h1 class="text-sm font-bold text-primary"> Data Tabel : <span class="p-2  rounded-lg"> ( {{$getDataIbuHamilCount}} )</span></h1>
            <a href="{{ route('dataibuhamil.create') }}"
                class="bg-primary py-3 px-6 rounded-xl text-white font-medium flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                  </svg>EDIT SOAL PENIALIAN</a>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full">


            {{-- Table --}}
            <table
                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 text-center w-full mb-3 ">
                <thead class="text-xs text-gray-200 uppercase bg-[#1c2434] dark:bg-gray-700 dark:text-gray-400 ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            NO
                        </th>
                        <th scope="col" class="px-6 py-3">
                            NAMA
                        </th>
                        <th scope="col" class="px-6 py-3">
                            NIK
                        </th>
                        <th scope="col" class="px-6 py-3">
                            HASIL
                        </th>
                        <th scope="col" class="px-6 py-3">
                            SARAN
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center justify-center">
                                AKSI
                                <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg></a>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 text-center ">
                    @foreach ($datas as $no => $hasil)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 text-center w-full">
                        <th scope="row" class="">{{ $loop->iteration }}</th>
                        <td class="px-6 py-4">{{ $hasil->nama }}</td>
                        <td class="px-6 py-4">{{ $hasil->nik }}</td>
                        <td class="px-6 py-4">{{ $hasil->risk_level }}</td>
                        <td class="px-6 py-4">{{ $hasil->saran }}</td>
                        <td class="px-6 py-4 flex justify-center items-center gap-2">
                            {{-- @if(Auth::user()->isAdmin()) --}}


                        </td>

                        <td class="px-6 py-4 flex justify-center items-center gap-2">
                            <a href="{{ url('/dashboard/admin/datapenilaianibuhamil/show', $hasil->id) }}" class="font-medium text-white py-2 px-2 bg-emerald-500 flex items-center gap-2 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </a>

                            <a href="{{ url('/dashboard/admin/datapenilaianibuhamil/edit', $hasil->id) }}" class="font-medium text-white py-2 px-2 bg-amber-500 flex items-center gap-2 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18.83 3.17a2.25 2.25 0 0 1 3.18 3.18l-10.8 10.8a1.5 1.5 0 0 1-.7.4l-4.5 1.5a.75.75 0 0 1-.92-.92l1.5-4.5a1.5 1.5 0 0 1 .4-.7l10.8-10.8Z" />
                                </svg>
                            </a>

                            <form method="POST" action="{{ url('/dashboard/admin/datapenilaianibuhamil/delete', $hasil->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-medium text-white py-2 px-2 bg-red-500 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 3.75v-1.5a.75.75 0 0 0-1.5 0v1.5h-3v-1.5a.75.75 0 0 0-1.5 0v1.5h-3v1.5h1.5v12h12v-12h1.5v-1.5h-3Zm-4.5 12a.75.75 0 0 0 .75.75h6a.75.75 0 0 0 .75-.75v-9a.75.75 0 0 0-.75-.75h-6a.75.75 0 0 0-.75.75v9Z" />
                                    </svg>
                                </button>
                            </form>

                        </td> <td class="px-3 py-3 flex justify-center items-center gap-1">


                        </td>

                    </tr>

                @endforeach
                </tbody>

            </table>
        </div>

    </div>
    @include('include.script')
</body>

</html>

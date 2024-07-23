<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Animate Css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


    @vite('resources/css/app.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('include.style')

</head>

<body>

    @include('include.sidebarsss')

    @section('success')
    @show
    @include('include.headers')
    <div class="container-fluid w-full lg:max-w-5xl lg:ml-72 lg:px-5 mt-7 relative mx-auto ">
        {{-- Toast Notification --}}
        @if (session()->has('success'))
            <div id="toast-success"
                class="absolute flex justify-end right-0 items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800 animate__animated animate__bounceInRight"
                role="alert">
                <div
                    class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                    </svg>
                    <span class="sr-only">Check icon</span>
                </div>
                <div class="ms-3 text-sm font-normal">{{ session()->get('success') }}</div>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                    data-dismiss-target="#toast-success" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        @endif




        <div class="row">
            <div class="col-md-12">
                <div class="p-2 bg-[#1c2434] rounded-lg mt-5">
                    <h1 class="font-bold text-white text-3xl p-3">
                        DETAIL
                    </h1>
                </div>

                <div class="mt-7 mb-5 flex items-center justify-between bg-gray-200 p-2 rounded-lg relative ">
                    <input type="hidden" id="idnya" value="{{ $id }}">
                    <h1 class="text-sm font-bold text-primary"> atas nama : <span class="p-2  rounded-lg">
                            ( {{ $detail->nama }} )</span></h1>
                </div>
                <div class="mt-7 mb-5 flex items-center justify-between bg-gray-200 p-2 rounded-lg relative ">
                    <h1 class="text-sm font-bold text-primary"> NIK : <span class="p-2  rounded-lg">
                            ( {{ $detail->nik }} )</span></h1>
                </div>
                <div class="mt-7 mb-5 flex items-center justify-between bg-gray-200 p-2 rounded-lg relative ">
                    <h1 class="text-sm font-bold text-primary"> no. HP : <span class="p-2  rounded-lg">
                            ( {{ $detail->noHP }} )</span></h1>
                </div>

                <div class="p-2 bg-[#1c2434] rounded-lg mt-5">
                    <h1 class="font-bold text-white text-3xl p-3">
                        PEMANTAUAN
                    </h1>
                </div>

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full">
                    <div class="table-responsive mb-5">
                        <table class="table nowrap" id="myTable" width="100%" cellspacing="0">
                            <thead>
                                <tr align="center">
                                    <th>#no</th>
                                    <th>lokasi</th>
                                    <th>kota/kabupaten</th>
                                    <th>created at</th>
                                </tr>
                            </thead>
                            <tbody id="tableData">
                                @foreach ($pemantauan as $key => $item)
                                    <tr align="center">
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->lokasi }}</td>
                                        <td>{{ $item->kota }}</td>
                                        <td>{{ $item->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="p-2 bg-[#1c2434] rounded-lg mt-5">
                    <h1 class="font-bold text-white text-3xl p-3">
                        PENATALAKSANAAN
                    </h1>
                </div>

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full">
                    <div class="table-responsive mb-5">
                        <table class="table nowrap" id="myTable2" width="100%" cellspacing="0">
                            <thead>
                                <tr align="center">
                                    <th>#no</th>
                                    <th>tanggal</th>
                                    <th>arahan</th>
                                    <th>created at</th>
                                </tr>
                            </thead>
                            <tbody id="tableData">
                                @foreach ($penatalaksana as $key => $item)
                                    <tr align="center">
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->tanggal }}</td>
                                        <td>{{ $item->arahan }}</td>
                                        <td>{{ $item->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <script lang="text/javascript">
            $(document).ready(function() {
                var table = new DataTable('#myTable2');
            });
        </script>

    </div>
    @include('include.script')
</body>

</html>

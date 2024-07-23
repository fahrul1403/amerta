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




        <div class="p-2 bg-[#1c2434] rounded-lg mt-5">
            <h1 class="font-bold text-white text-3xl p-3">
                PENATALAKSANAAN
            </h1>
        </div>

        {{-- Tambah Data --}}
        <div class="mt-7 mb-5 flex items-center justify-between bg-gray-200 p-2 rounded-lg relative ">
            <input type="hidden" id="idnya" value="{{ $id }}">
            <h1 class="text-sm font-bold text-primary"> atas nama : <span class="p-2  rounded-lg">
                    ( {{ $detail->nama }} )</span></h1>

        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full">
            <div class="w-full lg:max-w-5xl mx-auto px-5 mt-20">
                <form action="">
                    <div class="mb-5">
                        <label for="nama"
                            class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">tanggal</label>
                        <input type="date" id="tanggal" name="tanggal"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="" />
                    </div>
                    <div class="mb-5">
                        <label for="nama"
                            class="block  mb-3 text-sm font-medium text-gray-900 dark:text-white">asuhan</label>
                        <textarea type="date" id="arahan" name="arahan" cols="3" rows="7"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-4  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                    </div>
                    <div class="mb-5">
                        <button type="button" onclick="simpan({{ $id }})"
                            class="text-white bg-primary font-medium rounded-lg text-sm  sm:w-auto px-6 py-3 text-center mt-7">Simpan</button>
                    </div>
                </form>
            </div>


            {{-- data table --}}
            <div class="table-responsive mb-5">
                <table class="table nowrap" id="myTable" width="100%" cellspacing="0">
                    <thead>
                        <tr align="center">
                            <th>#no</th>
                            <th>tanggal</th>
                            <th>araham</th>
                            <th>created at</th>
                        </tr>
                    </thead>
                    <tbody id="tableData">
                        {{-- from ajax --}}
                    </tbody>
                </table>
            </div>

        </div>


    </div>
    <script lang="text/javascript">
        $(document).ready(function() {
            // var table = new DataTable('#myTable');
            getHistory()
        });

        function getHistory() {
            let id = $('#idnya').val();
            $.ajax({
                type: "GET",
                url: `{{ url('/dashboard/verificator/penatalaksana-history/${id}') }}`,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                contentType: 'application/json',
                data: [],
                success: function(res) {
                    // sukses
                    var tr = '';
                    res.data.forEach((el, i) => {
                        tr += `<tr align="center">
                                <td>${i + 1}</td>
                                <td>${el.tanggal}</td>
                                <td>${el.arahan}</td>
                                <td>${el.created_at}</td>
                            </tr>`
                    });

                    $('#tableData').html(tr)
                    new DataTable('#myTable');
                },
                error: function(data, textStatus, errorThrown) {
                    console.log(data);

                },
            });
        }


        function simpan(id) {

            let data = {
                tanggal: $('#tanggal').val(),
                arahan: $('#arahan').val(),
            }

            Swal.fire({
                title: "anda yakin ingin mengubah data keanggotaan ini ?",
                showDenyButton: true,
                showCancelButton: false,
                confirmButtonText: "ya, saya yakin",
                denyButtonText: `batalkan`
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $.ajax({
                        type: "POST",
                        url: `{{ url('/dashboard/verificator/penatalaksana/${id}') }}`,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        contentType: 'application/json',
                        data: JSON.stringify(data),
                        success: function(res) {
                            if (res.status) {
                                Swal.fire(
                                    '',
                                    res.message,
                                    'success'
                                ).then(() => {
                                    getHistory()
                                });
                            } else {

                                if (res.data.length < 1) {
                                    Swal.fire(
                                        '',
                                        res.message,
                                        'error'
                                    )
                                    return
                                }

                                var msg = '';
                                res.data.forEach((el) => {
                                    msg += ` <div class="alert alert-danger">${el}</div>`;
                                });
                                $('#errorMsgupdate').html(msg);
                            }

                        },
                        error: function(data, textStatus, errorThrown) {
                            console.log(data);

                        },
                    });
                } else if (result.isDenied) {}
            });
        }
    </script>

    @include('include.script')
</body>

</html>

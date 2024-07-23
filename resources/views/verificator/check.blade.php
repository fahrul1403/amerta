<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


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
            <h1 class="font-bold text-white text-3xl ">
                VERIFIKASI DATA PEMERIKSAAN
            </h1>
        </div>

        {{-- Tambah Data --}}
        <div class="mt-7 mb-5 flex items-center justify-between bg-gray-200 p-2 rounded-lg relative ">

            <h1 class="text-sm font-bold text-primary"> Data Tabel : <span class="p-2  rounded-lg"> (
                    {{ $count }} )</span></h1>

        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full">
            <table
                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 text-center w-full mb-3">
                <thead class="text-xs text-gray-200 uppercase bg-[#1c2434] dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">No</th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center justify-center">
                                Nama
                                <a href="#">
                                    <svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg>
                                </a>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center justify-center">
                                Nik
                                <a href="#">
                                    <svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg>
                                </a>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center justify-center">
                                No. HP
                                <a href="#">
                                    <svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg>
                                </a>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center justify-center">
                                Hasil
                                <a href="#">
                                    <svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg>
                                </a>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center justify-center">
                                Status
                                <a href="#">
                                    <svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg>
                                </a>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center justify-center">
                                Action
                                <a href="#">
                                    <svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg>
                                </a>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($verif as $key => $item)
                        <tr class="bg-white dark:bg-gray-900 border-b dark:border-gray-700">
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $key + 1 }}</td>
                            <td class="px-6 py-4">
                                {{ $item->nama }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->nik }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->noHP }}
                            </td>
                            <td class="px-6 py-4">
                                @php
                                    $bgColor =
                                        $item->risk_level === 'Risiko tinggi'
                                            ? 'bg-yellow-300'
                                            : ($item->risk_level === 'Risiko sangat tinggi'
                                                ? 'bg-red-500'
                                                : 'bg-gray-300');
                                @endphp
                                <span
                                    class="inline-block px-3 py-1 text-sm font-semibold text-white {{ $bgColor }} text-black rounded-20"
                                    style="color: black !important">
                                    {{ $item->risk_level }}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->status }}
                            </td>
                            <td class="px-6 py-4 flex justify-center items-center gap-2">
                                <a href="{{ route('verificator.detail', $item->id) }}"
                                    class="font-medium text-white py-2 px-2 bg-amber-500 flex items-center gap-2 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </a>

                                <button type="button" onclick="approval({{ $item->id }}, 1)"
                                    class="font-medium text-white py-2 px-2 bg-emerald-500 flex items-center gap-2 rounded-lg {{ $item->status !== 'MENUNGGU APPROVAL' ? 'btn-disabled' : '' }}"
                                    {{ $item->status !== 'MENUNGGU APPROVAL' ? 'disabled' : '' }}>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12l6 6L19.5 6" />
                                    </svg>
                                </button>

                                <button type="button" onclick="reject({{ $item->id }}, 0)"
                                    {{ $item->status !== 'MENUNGGU APPROVAL' ? 'disabled' : '' }}
                                    class="font-medium text-white py-2 px-2 bg-red-500 rounded-lg {{ $item->status !== 'MENUNGGU APPROVAL' ? 'btn-disabled' : '' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>

                            </td>
                            <td class="px-3 py-3 flex justify-center items-center gap-1">
                                <a href="{{ route('verificator.penatalaksanashow', $item->id) }}"
                                    class="bg-primary py-3 px-3 rounded-xl text-white font-medium flex items-center gap-2 -ml-2">
                                    Penatalaksanaan
                                </a>
                            </td>
                            <td class="px-3 py-3 flex justify-center items-center gap-1">
                                <a href="{{ route('verificator.penatalaksana', $item->id) }}" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal"
                                    class="bg-primary py-3 px-3 rounded-xl text-white font-medium flex items-center gap-2 -ml-2">
                                    Pemantauan
                                </a>
                            </td>
                        </tr>

                        {{-- MODAL PEMANTAUAN --}}
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Pemantauan</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Lokasi
                                                :</label>
                                            <textarea type="date" id="lokasi{{ $item->id }}" name="lokasi" cols="3" rows="7"
                                                class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Kabupaten
                                                :</label>
                                            <select id="id_kota{{ $item->id }}" class="form-control"
                                                id="">
                                                <option value="" selected disabled>pilih kota/kabupaten</option>
                                                @foreach ($kota as $kotas)
                                                    <option value="{{ $kotas->id_kota }}">{{ $kotas->kota }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Kondisi
                                                :</label>
                                            <select id="status{{ $item->id }}" class="form-control"
                                                id="">
                                                <option value="" selected disabled>pilih kondisi</option>
                                                <option value="HIDUP">HIDUP</option>
                                                <option value="MENINGGAL">MENINGGAL</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button onclick="savePemantauan({{ $item->id }})" type="button"
                                            class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>


        <script lang="text/javascript">
            function approval(id, flaging) {

                let data = {
                    id: id,
                    flag: flaging,
                }

                Swal.fire({
                    title: "anda yakin ingin melakukan approval ini ?",
                    showDenyButton: true,
                    showCancelButton: false,
                    confirmButtonText: "ya, saya yakin",
                    denyButtonText: `batalkan`
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "POST",
                            url: `{{ url('/dashboard/verificator/approval') }}`,
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
                                        location.reload()
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

            function savePemantauan(id) {

                let data = {
                    fk_id: id,
                    lokasi: $('#lokasi' + id).val(),
                    id_kota: $('#id_kota' + id).val(),
                    status: $('#status' + id).val(),
                }

                Swal.fire({
                    title: "anda yakin ingin melakukan submit pemantauan ini ?",
                    showDenyButton: true,
                    showCancelButton: false,
                    confirmButtonText: "ya, saya yakin",
                    denyButtonText: `batalkan`
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "POST",
                            url: `{{ url('/dashboard/verificator/pemantauan') }}`,
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
                                        location.reload()
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

            function reject(id, flaging) {

                let data = {
                    id: id,
                    flag: flaging,
                }

                Swal.fire({
                    title: "Anda yakin ingin melakukan approval ini?",
                    input: 'text',
                    inputLabel: 'Masukkan alasan',
                    inputPlaceholder: 'Ketik alasan di sini...',
                    showDenyButton: true,
                    showCancelButton: false,
                    confirmButtonText: "Ya, saya yakin",
                    denyButtonText: `Batalkan`
                }).then((result) => {
                    if (result.isConfirmed) {
                        data.reason = result.value; // Add the input value to the data object

                        $.ajax({
                            type: "POST",
                            url: `{{ url('/dashboard/verificator/approval') }}`,
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
                                        location.reload()
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
                    } else if (result.isDenied) {
                        // Handle deny action if needed
                    }
                });
            }
        </script>


    </div>
    @include('include.script')
</body>

</html>

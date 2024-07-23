{{-- css style --}}
<link rel="stylesheet" href="{{ asset('template/assets/css/main/app.css') }}">
<link rel="stylesheet" href="{{ asset('template/assets/css/main/app-dark.css') }}">
<link rel="shortcut icon" href="{{ asset('template/assets/images/logo/favicon.svg') }}" type="image/x-icon">
<link rel="shortcut icon" href="{{ asset('template/assets/images/logo/favicon.png') }}" type="image/png">

<link rel="stylesheet" href="{{ asset('template/assets/css/shared/iconly.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

{{-- sweetalert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

{{-- datatable --}}
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>


<style>
    div:where(.swal2-container) button:where(.swal2-styled):where(.swal2-confirm) {
        background-color: #007bff !important
    }

    div:where(.swal2-container) button:where(.swal2-styled):where(.swal2-deny) {
        background-color: red !important
    }

    .btn-disabled {
        background-color: #d1d5db;
        /* Light gray background */
        cursor: not-allowed;
        /* Show a 'not allowed' cursor */
        opacity: 0.6;
        /* Reduce opacity to indicate it's disabled */
    }
</style>

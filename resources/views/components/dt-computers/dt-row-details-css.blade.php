@section('css_before')
<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="{{ asset('js/plugins/datatables/dataTables.bootstrap4.css') }}">
<style>
    td.details-control {
        background: url('https://editor.datatables.net/examples/resources/details_open.png') no-repeat center center;
        cursor: pointer;
        width: 1px;
    }

    tr.shown td.details-control {
        background: url('https://editor.datatables.net/examples/resources/details_close.png') no-repeat center center;
    }

    div.slider {
        display: none;
    }

    table.dataTable tbody td.no-padding {
        padding: 0;
    }

    [tabindex="-1"]:focus:not(:focus-visible) {
        outline: 0 !important;
    }
</style>
@endsection
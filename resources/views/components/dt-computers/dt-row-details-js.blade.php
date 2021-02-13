@section('js_after')
<!-- Page JS Plugins -->
<script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<!-- Page JS Code -->
<script src="{{ asset('js/pages/tables_datatables.js') }}"></script>
<script>
  function format ( d ) {
return '<div class="slider">'+
  '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
    '<tr>'+
      '<td>Full name:</td>'+
      '<td>'+d.name+'</td>'+
      '</tr>'+
    '<tr>'+
      '<td>Extension number:</td>'+
      '<td>'+d.email+'</td>'+
      '</tr>'+
    '<tr>'+
      '<td>Extra info:</td>'+
      '<td>And any further details here (images etc)...</td>'+
      '</tr>'+
    '</table>'+
  '</div>';
}

$(document).ready(function() {
var dt = $('#example').DataTable( {
"processing": true,
"serverSide": true,
"ajax": "{{ route('admin.dash') }}",
"language": {
"lengthMenu": "Display _MENU_ records per page",
"zeroRecords": "Registro no encontrado",
"info": "Showing page _PAGE_ of _PAGES_",
"infoEmpty": "No records available",
"infoFiltered": "(filtered from _MAX_ total records)"
},
"columns": [
{
"class": "details-control",
"orderable": false,
"data": null,
"defaultContent": ""
},
{ "data": "name" },
{ "data": "email" },
{ "data": "created_at" },
{ "data": "updated_at" },
{ "data": "action" }
],
"order": [[1, 'asc']]
} );

// Array to track the ids of the details displayed rows
$('#example tbody').on('click', 'td.details-control', function () {
var tr = $(this).closest('tr');
var row = dt.row( tr );

if ( row.child.isShown() ) {
// This row is already open - close it
$('div.slider', row.child()).slideUp( function () {
row.child.hide();
tr.removeClass('shown');
} );
}
else {
// Open this row
row.child( format(row.data()), 'no-padding' ).show();
tr.addClass('shown');

$('div.slider', row.child()).slideDown();
}
} );
} );
</script>
@endsection
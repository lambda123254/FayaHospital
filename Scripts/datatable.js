$(document).ready( function () {
    var table = $('#datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '../Modules/Datatable/datatable_processing.php?context=patient',
    });
    
});
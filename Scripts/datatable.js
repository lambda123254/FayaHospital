function setDatatable(parameter) {
    let ajaxUrl = "../Modules/Datatable/datatable_processing.php?context=" + parameter
    var table = $('#datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: ajaxUrl
    });
}


var icon = '<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-hospital" viewBox="0 0 16 16"><path d="M8.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1h1ZM13.25 9a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Zm.25 1.75a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5Zm-11-4a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 9.75v-.5A.25.25 0 0 0 2.75 9h-.5Zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Z"/><path d="M5 1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1V1Zm2 14h2v-3H7v3Zm3 0h1V3H5v12h1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3Zm0-14H6v1h4V1Zm2 7v7h3V8h-3Zm-8 7V8H1v7h3Z"/></svg>'

$(document).ready(function() {
    var home = $('#homeButtonArea')
    var form = $('#homeFormArea')
    var profile = $('#homeProfileArea')
    var formTitle = $('#formTitle')
    var datatable = $('#homeDataTableArea')
    var input = $('#homeDataInputArea')
    
    $(document).on("click", "#rawatInapButton", function() {
        home.addClass("d-none")
        form.removeClass("d-none")
        profile.addClass("d-none")
        formTitle.html(icon + "&nbsp;" + "Rawat Inap")
        datatable.addClass("d-none")
        input.addClass("d-none")
        $('#inputContext').val("Rawat Inap");
    });

    $(document).on("click", "#rawatJalanButton", function() {
        home.addClass("d-none")
        form.removeClass("d-none")
        profile.addClass("d-none")
        formTitle.html(icon + "&nbsp;" + "Rawat Jalan")
        datatable.addClass("d-none")
        profile.addClass("d-none")
        input.addClass("d-none")
        $('#inputContext').val("Rawat Jalan");
    });

    $(document).on("click", "#profileButton", function() {
        home.addClass("d-none")
        form.addClass("d-none")
        profile.removeClass("d-none")
        datatable.addClass("d-none")
        input.addClass("d-none")
    });

    $(document).on("click", "#inputDataButton", function() {
        home.addClass("d-none")
        form.addClass("d-none")
        profile.addClass("d-none")
        datatable.addClass("d-none")
        input.removeClass("d-none")
    });
});

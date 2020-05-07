function redirect(url) {
    window.location = url;
}

function excluir() {
    $('#modal-excluir').modal('show');
}

function confDelet() {
        $('#modal-excluir').modal('hide');
        $('#exampleModal').modal('show');
        $('#menssagem').html('<div class="alert alert-success"> Registro removido com sucesso. </div>');
}

function saveRedirec() {

    if ($('.alert-success').is(":visible")) {
        redirect('index.html');
    }

}
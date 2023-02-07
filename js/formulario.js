$(document).ready(function () {

    $('#btnSend').click(function () {

        var errores = '';

        // Validado Nombre ==============================
        if ($('#names').val() == '') {
            errores += '<p><i class="fas fa-user-alt"></i> Escriba un nombre</p>';
            $('#names').css("border-bottom-color", "#F14B4B")
        } else {
            $('#names').css("border-bottom-color", "#d1d1d1")
        }

        // Validado telefono ==============================
        if ($('#phone').val() == '') {
            errores += '<p><i class="fab fa-whatsapp"></i> Escriba su telefono</p>';
            $('#phone').css("border-bottom-color", "#F14B4B")
        } else {
            $('#phone').css("border-bottom-color", "#d1d1d1")
        }


        // Validado Correo ==============================
        if ($('#email').val() == '') {
            errores += '<p><i class="fas fa-at"></i> Ingrese un correo</p>';
            $('#email').css("border-bottom-color", "#F14B4B")
        } else {
            $('#email').css("border-bottom-color", "#d1d1d1")
        }

        // Validado Nombre ==============================
        if ($('#mensaje').val() == '') {
            errores += '<p><i class="fas fa-envelope xdpad"></i> Escriba su mensaje</p>';
            $('#mensaje').css("border-bottom-color", "#F14B4B")
        } else {
            $('#mensaje').css("border-bottom-color", "#d1d1d1")
        }


        // ENVIANDO MENSAJE ============================
        if (errores == '' == false) {
            var mensajeModal = '<div class="modal_wrap">' +
                '<div class="mensaje_modal">' +
                '<h3>Errores encontrados</h3>' +
                errores +
                '<span id="btnClose">Cerrar</span>' +
                '</div>' +
                '</div>'

            $('body').append(mensajeModal);
            $(".modal_wrap").show();
        }

        // CERRANDO MODAL ==============================
        $('#btnClose').click(function () {
            $('.modal_wrap').remove();
        });
    });

});
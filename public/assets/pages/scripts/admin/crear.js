$(document).ready(function () {
    Biblioteca.validacionGeneral('form-general');
    $('#icono').on('blur', function () {
        $('#mostrar-icono').removeClass().addClass('fa' + $(this).val());
    });
});

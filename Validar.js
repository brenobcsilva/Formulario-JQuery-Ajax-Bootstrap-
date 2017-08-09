$('#formulario').submit(function (e) {
    e.preventDefault();

    if ($('#enviar').val() == "Enviando...") {
        alert('Falso');
    }
    $('#enviar').val('Enviando...');

    $.ajax({
        url: 'validaFormulario.php',
        type: 'post',
        dataType: 'html',
        data: {
            'metodo': $('#metodo').val(),
            'metodo': $('#exampleInputNome').val(),
            'metodo': $('#exampleInputEmail1').val(),
            'metodo': $('#exampleInputSenha').val(),
            'metodo': $('#exampleInputConfirmarSenha').val()
        }
    }).done(function (data) {
        alert(data);

        $('#metodo').val(),
        $('#enviar').val('Envar dados');
        $('#exampleInputNome').val('');
        $('#exampleInputEmail1').val('');
        $('#exampleInputSenha').val('');
        $('#exampleInputConfirmarSenha').val('');
    }
    );
});
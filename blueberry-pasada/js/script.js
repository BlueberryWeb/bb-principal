function menu(){
    document.getElementById('menu').style.display = 'block';
    document.getElementById('header').style.display = 'none';
}
function cerrar(){
    document.getElementById('header').style.display = 'flex';
    document.getElementById('menu').style.display = 'none';
}
$('#form').submit(function (event) {
    event.preventDefault();
    grecaptcha.ready(function () {
        grecaptcha.execute('6Lcpk1UgAAAAAEpHwSdFO-KYtfupDS0T5L_Kxrs0', { action: 'registro' }).then(function (token) {
            $('#form').prepend('<input type="hidden" name="token" value="' + token + '">');
            $('#form').prepend('<input type="hidden" name="action" value="registro">');
            $('#form').unbind('submit').submit();
        });
    });
});
function enviar(){
    document.getElementById('mensaje-agradecimiento').style.display = 'block';
    document.getElementById('contacto').style.display = 'none';
}
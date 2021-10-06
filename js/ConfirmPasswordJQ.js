$(document).ready(function(){
    $('#password, #confirm_password').on('keyup', function () {
        if ($('#password').val() == $('#confirm_password').val()) {
          $('#message').html('Coinciden').css('color', 'green');
        } else 
          $('#message').html('La contraseña no es correcta').css('color', 'red');
      });
});
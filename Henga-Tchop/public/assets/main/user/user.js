/*
    code javascript pour la verification de l'enregistrement des utilisateurs

*/

$('#register-user').click(function(){
    var firstname = $('#firstname').val();
    var lastname = $('#lastname').val();
    var email = $('#email').val();
    var password = "";
    password = $('#password').val();
    var passwordconfirm = $('#password-confirm').val();
    var passwordLength = password.length
    var agreeTerms = $('#agreeterms') ;

    if(firstname != "" && /^[a-zA-Z]+$/.test(firstname)){
        $('#firstname').removeClass('is-invalid');
        $('#firstname').addClass('is-valid');
        $('#error-register-firstname').text('')

        if(lastname != "" && /^[a-zA-Z]+$/.test(lastname)){
            $('#lastname').removeClass('is-invalid');
            $('#lastname').addClass('is-valid');
            $('#error-register-lastname').text('')


            if(email != "" && /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/.test(email) ){
                $('#email').removeClass('is-invalid');
                $('#email').addClass('is-valid');
                $('#error-register-email').text('')

                if(passwordLength >= 8){
                    $('#password').removeClass('is-invalid');
                    $('#password').addClass('is-valid');
                    $('#error-register-password').text('');

                    if(password == passwordconfirm){
                        $('#password-confirm').removeClass('is-invalid');
                        $('#password-confirm').addClass('is-valid');
                        $('#error-register-password-confirm').text('');


                        if(agreeTerms.is(':checked')){
                            $('#agreeterms').removeClass('is-invalid');
                            $('#error-register-agreeterms').text('');

                            /* Envoie du formulaire  */
                            $('#form-register').submit();

                        }else{
                            $('#agreeterms').addClass('is-invalid');
                            $('#error-register-agreeterms').text('You should agree to our terms and conditions!');
                        }


                    }else{
                        $('#password-confirm').addClass('is-invalid');
                        $('#password-confirm').removeClass('is-valid');
                        $('#error-register-password-confirm').text('Your passwords must be identical!');
                    }


                }else{
                    $('#password').addClass('is-invalid');
                    $('#password').removeClass('is-valid');
                    $('#error-register-password').text('Your password must be a last at 8 characteres!');
                }

            }else{
                $('#email').addClass('is-invalid');
                $('#email').removeClass('is-valid');
                $('#error-register-email').text('Email is not valid!')
            }


        }else{
            $('#lastname').addClass('is-invalid')
            $('#lastname').removeClass('is-valid');
            $('#error-register-lastname').text('Last name is not valid !')
        }


    }else{
        $('#firstname').addClass('is-invalid')
        $('#firstname').removeClass('is-valid');
        $('#error-register-firstname').text('First name is not valid !')

        console.log("ok test");

    }
});

/*
Evenement pour changer l'effet du bouton de terme et condition
 */
$('#agreeterms').change(function(){

    var agreeTerms = $('#agreeterms');
    if(agreeTerms.is(':checked')){
        $('#agreeterms').removeClass('is-invalid');
        $('#error-register-agreeterms').text('');
    }else{
        $('#agreeterms').addClass('is-invalid');
        $('#error-register-agreeterms').text('You should agree to our terms and conditions!');sudo
    }

})


/*

code pour la modifictaion des utilisateurs

*/


function modifier(id){
    var nom = document.getElementById("nom-"+id).innerHTML;
    var email = document.getElementById("email-"+id).innerHTML;
    var role = document.getElementById("role-"+id).innerHTML;
    var permission = document.getElementById("permission-"+id).innerHTML;

    document.getElementById("tab-data").style.display = 'none';
    document.getElementById("form-modif").style.display = 'block';
    document.getElementById("role-admin").style.display = 'none';
    document.getElementById("block-stat").style.display = 'none';

    document.getElementById('name').value = nom;
    document.getElementById('email').value = email;
    document.getElementById('role').value = role;
    // document.getElementById('permission').optio = permission;

    // alert(nom+" "+email+" "+role+" "+permission);
}






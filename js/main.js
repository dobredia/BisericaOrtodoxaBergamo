$(function(){
    if ($('body').height() <= $(window).height()) {
        $('#footer').css({
            position: 'fixed',
            bottom: '10px'
        });
    } else {
       $('#footer').css({}); 
    }
    
    $('#adminLogin').click(function(){
       var auth = $('#user').val() + $('#password').val(); 
       auth = CryptoJS.SHA512(auth).toString(CryptoJS.enc.Hex);
       $.post( "admin/login.php", { auth: auth })
        .done(function( authenticated ) {
            if(authenticated == 1){
                window.location.href = "index.php?admin";
            }else{
                $('#wrongCredentials').html('Userul sau parola sunt gresite. Va rugam icercati din nou.')
            }
        }).fail(function(err){
            console.log('Error: ' + err.responseText);
        });
       return false;
    });
});
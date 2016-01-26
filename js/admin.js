$(function(){
    console.log('admin');
    $('#logout').click(function(){
       $.post( "admin/logout.php")
        .fail(function(err){
            console.log('Error: ' + err.responseText);
        }); 
        this.remove();
        return false;
    });
});


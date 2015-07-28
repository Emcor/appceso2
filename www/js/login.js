$(document).ready(function(){
    $("#errorMsg").hide();
    $("#btnLogin").click(function(){
        var usu = $("#txtuser").val();
        var pass = $("#txtpassword").val();
        $.post("http://192.168.0.100/proyectos/acceso/www/login.php",{ usu : usu, pass : pass},function(respuesta){
            if (respuesta == true) {
                $.mobile.changePage("otro.html");
            }
			else{
                $.mobile.changePage('#pageError', 'pop', true, true);
                /*$("#errorMsg").fadeIn(300);
                $("#errorMsg").css("display", "block");*/
            }
        });
    });
});
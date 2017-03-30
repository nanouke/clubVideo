/**
 * Created by Paul Rancourt on 3/30/2017.
 */
// Fonction qui utilise le AJAX pour faire un logout

function logout(){
    $.ajax({
        url:"../businessLayer/LoginsBL.php",
        method: "POST",
        data: {logout: "loggedUser"},
        success: function (data, status){
            console.log(data);

            if (data == "Logged Out"){
                window.location.href = "accueil.php";
            }
        }
    });
}
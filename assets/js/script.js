var map;
function initMap() {
  	map = new google.maps.Map(document.getElementById('map'), {
    	center: {lat: 24.879177, lng: 121.182466},
    	zoom: 7
  	});
}

$(document).ready(function(){
    $("#usagers").click(function(){
        $("#section").load("inc/usagers.php");
    });

    $("#main-section").on("click","#usager_add", function(){
        $("#section").load("inc/usager_add.php");
    });

    $("#marqueurs").click(function(){
        $("#section").load("inc/marqueurs.php");
    });

    $("#connexion").click(function(){
        $("#section").load("inc/connexion.php");
        /*$.ajax({
            url: "inc/connexion.php",
            type: "GET",
            data: 'go',
            contentType:'text/html',
            success: function(result){
                $("#section").html(result);
            }
        });*/
    });
    
    $("#main-section").on("click","#inscription", function(){
        $("#section").load("inc/inscription.php");
    });
    

    $("#main-section").on("click","#forgotpassword", function(){
        $("#section").load("inc/forgotpassword.php");
    });
    
    $("#deconnexion").click(function(){
        $.ajax({
            url: "inc/deconnexion.php", 
            success: function(result){
                document.location = "http://localhost/interet/";
            }
        });
    });
});
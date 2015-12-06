var map;
function initMap() {
  	map = new google.maps.Map(document.getElementById('map'), {
    	center: {lat: 24.879177, lng: 121.182466},
    	zoom: 7
  	});
}

var mapmarker;
function initMapMarker() {
    mapmarker = new google.maps.Map(document.getElementById('mapmarker'), {
        center: {lat: 24.879177, lng: 121.182466},
        zoom: 7
    });

    var marqueur = new google.maps.Marker({
            position: new google.maps.LatLng(24.879177, 121.182466),
            map: mapmarker,
            draggable: true,
        });

    google.maps.event.addListener(marqueur, 'dragend', function(event) {

        $("#latitude").val(event.latLng.lat());
        $("#longitude").val(event.latLng.lng());
    });
}

$(document).ready(function(){
/*    $("#usagers").click(function(){
        $("#section").load("inc/usagers.php");
    });*/

    $("#main-section").on("click","#usager_add", function(){
        $("#section").load("inc/usager_add.php");
    });

/*    $("#marqueurs").click(function(){
        $("#section").load("inc/marqueurs.php");
    });*/
    
    $("#main-section").on("click","#marqueur_add", function(){
        $.ajax({
            url: "inc/marqueur_add.php",
            success: function(result){
                $("#section").html(result);
                initMapMarker();
            }
        });
    });

    
    $("#profile").click(function(){
        var login = $(this).attr("data-login");
        $.ajax({
            url: "inc/profile.php",
            type: "GET",
            data: 'login='+login,
            contentType:'text/html',
            success: function(result){
                $("#section").html(result);
            }
        });
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
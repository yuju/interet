var map;
function initMap() {
  	map = new google.maps.Map(document.getElementById('map'), {
    	center: {lat: 24.879177, lng: 121.182466},
    	zoom: 7
  	});
}


initMap
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
    });
});
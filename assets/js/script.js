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

    $("#search-form").submit(function(e){
        var data = $(this).serialize();
        $.ajax({
            type : 'GET',
            url: "inc/search.php",
            data : data,
            dataType : "json",
            success: function(json){
                $.each(json, function(index, value) {  
                    var content =
                    '<div id="content">'+
                        '<div id="firstHeading" class="firstHeading">'+value.nom+'</div>'+
                        '<div id="imageContent">'+
                        '<img width="200px" src="assets/img/markers/'+value.image_name+'" class="img-rounded">'+
                        '</div>'+         
                        '<div id="siteNotice">'+
                        '</div>'+
                        
                        '<div id="bodyContent">'+
                            value.content+
                        '</div>'+
                                       
                    '</div>';

                    var infowindow = new google.maps.InfoWindow({
                        maxWidth: 400,
                        content: content
                    });
                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(value.latitude, value.longitude),
                        map: map,
                        title : value.nom
                    });
                    google.maps.event.addListener(marker, 'click', function() {
                        infowindow.open(map, marker);
                    });
                });
            }
        });
        return false;
    });

    $("#main-section").on("click","#usager_add", function(){
        $("#section").load("inc/usager_add.php");
    });
  
    $("#main-section").on("click","#marqueur_add", function(){
        $.ajax({
            url: "inc/marqueur_add.php",
            success: function(result){
                $("#section").html(result);
                initMapMarker();
            }
        });
    });

     $("#main-section").on("click","#marqueur_modify", function(){
        var id= $(this).attr('data-id');
        $.ajax({
            url: "inc/marqueur_modify.php",
            data : "id="+id,
            success: function(result){
                $("#section").html(result);
                initMapMarker();
            }
        });
    });

$("#main-section").on("click","#marqueur_delete", function(){
        var id= $(this).attr('data-id');
        $.ajax({
            url: "inc/marqueur_delete.php",
            data : "id="+id,
            success: function(result){
                $("#section").html(result);
                initMapMarker();
            }
        });
    });



$("#main-section").on("click","#usager_delete", function(){
        var id= $(this).attr('data-id');
        $.ajax({
            url: "inc/usager_delete.php",
            data : "id="+id,
            success: function(result){
                $("#section").html(result);
                initMapMarker();
            }
        });
    });



     $("#main-section").on("click","#usager_modify", function(){
        var id= $(this).attr('data-id');

       $.ajax({
            url: "inc/usager_modify.php",
            data : "id="+id,
            success: function(result){
                $("#section").html(result);
          }
        });
    });

    
    $("#profile").click(function(){
        var login = $(this).attr("data-login");
        $.ajax({
            url: "inc/profile.php",
            data: 'login='+login,
            contentType:'text/html',
            success: function(result){
                $("#section").html(result);
            }
        });
    });

    $("#connexion").click(function(){
        $("#section").load("inc/connexion.php");
    });

     $("#aboutme").click(function(){
        $("#section").load("inc/aboutme.php");
    });


     $("#contact").click(function(){
        $("#section").load("inc/contact.php");
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
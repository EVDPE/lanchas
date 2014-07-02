var map = null;
var directionsDisplay = null;	
var directionsService = null;
    
function initialize() {
  var myLatlng = new google.maps.LatLng(-8.123939, -34.924030);
  var myOptions = {
     zoom: 16,
     center: myLatlng,
     mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map($("#map_canvas").get(0), myOptions);
  var marker=new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: "Lanchatronik"
   });
   directionsDisplay = new google.maps.DirectionsRenderer();
   directionsService = new google.maps.DirectionsService();
}

function getDirections(){
	var start = $('#origen').val();
	var end = 'Aeroporto Internacional do Recife, Imbiribeira, Recife - Pernambuco, Brasil';        
    if(!start || !end){
		return;
	}
	var request = {
	   origin: start,
	   destination: end,
	   travelMode: google.maps.DirectionsTravelMode[$('#modo_viaje').val()],
	   unitSystem: google.maps.DirectionsUnitSystem[$('#tipo_sistema').val()],
	   provideRouteAlternatives: true
	};
	directionsService.route(request, function(response, status) {
	  if (status == google.maps.DirectionsStatus.OK) {
	      directionsDisplay.setMap(map);
	     // directionsDisplay.setPanel($("#directions_panel").get(0));
	      directionsDisplay.setDirections(response);
       } else {
	        alert("Não há nenhuma ligação entre estes dois pontos");
	   }
	   });
}
$('#origen').live('blur', function(){ getDirections(); 
                                   /*   document.getElementById('results').style.boxShadow="0px 0px 15px 15px #ccc";
                                      document.getElementById('results').style.marginLeft="5%";
                                      document.getElementById('results').style.marginRight="10%";
                                      document.getElementById('map_canvas').style.marginLeft="auto"; */
                                    });

//$('#buscar').live('click', function(){ getDirections(); });
$('.opciones_ruta').live('change', function(){ getDirections(); });
$(document).ready(function() {
  initialize();
  gmaps_ads();
 
}); 
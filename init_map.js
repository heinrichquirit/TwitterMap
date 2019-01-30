function initMap() {
    var options = {
        zoom: 8,
        center: { lat: -37.8136, lng: 144.9631 }
    }

    var map = new google.maps.Map(document.getElementById("map"), options);
    
    var marker = new google.maps.Marker({
        position: { lat: -37.8135, lng: 144.9630 },
        map: map,
//        icon: "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",
        // Title appears as tooltip, could 
        // be used to display tips
        title: "Work pls!"
    });
    
    /*map.setMarker(new google.maps.Marker({
        
        position: { lat: -37.8136, lng: 144.9631 },
        title: "Testing"
    
    }));*/
}

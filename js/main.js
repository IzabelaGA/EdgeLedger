
      // Initialize and add the map
function initMap() {
    // Your location
    const loc = { lat: 54.359810, lng: 18.591514 };
    // Centered map on location
    const map = new google.maps.Map(document.querySelector('.map'), {
      zoom: 10,
      center: loc
    });
    // The marker, positioned at location
    const marker = new google.maps.Marker({ position: loc, map: map });
  }
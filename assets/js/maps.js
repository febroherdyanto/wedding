// This example adds a marker to indicate the position of Bondi Beach in Sydney,
// Australia.
function initMap() {
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 10,
      center: { lat: -7.4729302, lng: 111.6385604 },
    });
    const image =
      "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png";
    const beachMarker = new google.maps.Marker({
      position: { lat: -7.4729302, lng: 111.6385604 },
      map,
      icon: image,
    });
  }

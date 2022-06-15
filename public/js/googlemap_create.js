function loadMap() {
    var lat = Number(document.getElementById("lat").value);
    var lng = Number(document.getElementById("lng").value);
    const uluru = { lat: lat, lng: lng };
  const map = new google.maps.Map(
    document.getElementById("map"),
    {
      zoom: 6,
      center: uluru,
    });

    const marker = new google.maps.Marker({
        position: uluru,
        map: map,
        draggable: true
    });

    marker.addListener('dragend', function (e) {
      document.getElementById("lat").value = e.latLng.lat();
      document.getElementById("lng").value = e.latLng.lng();
    });
}

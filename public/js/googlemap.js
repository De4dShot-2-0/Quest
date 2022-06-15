function loadMap() {
    var lat = Number(document.getElementById("lat").value);
    var lng = Number(document.getElementById("lng").value);
    const uluru = { lat: lat, lng: lng };
  const map = new google.maps.Map(
    document.getElementById("map"),
    {
      zoom: 13,
      center: uluru,
    });

    const marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
}

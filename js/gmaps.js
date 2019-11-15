function initialize() {
    var coltsCenter = new google.maps.LatLng(42.503992, -90.666595);
    var mapCanvas = document.getElementById('map_canvas');
    var mapOptions = {
        center: coltsCenter,
        zoom: 16,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false
    };
    var map = new google.maps.Map(mapCanvas, mapOptions);

    var marker = new google.maps.Marker({
      position: coltsCenter,
      map: map,
      title: 'Colts Community Center'
  });
}
google.maps.event.addDomListener(window, 'load', initialize);
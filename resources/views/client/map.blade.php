@extends('client.layout.master')
@section('content')
<div class="container">
    <div id="map" style="width: 100%; height: 500px;"></div>
    
</div>
    @push('scripts')
        <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
   
        <script type="text/javascript">
            var locations = [
              ['Bondi Beach', -33.890542, 151.274856, 4],
              ['Coogee Beach', -33.923036, 151.259052, 5],
              ['Cronulla Beach', -34.028249, 151.157507, 3],
              ['Manly Beach', -33.80010128657071, 151.28747820854187, 2],
              ['Maroubra Beach', -33.950198, 151.259302, 1]
            ];
        
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 13,
              center: new google.maps.LatLng(10.298318, 123.971546),
              mapTypeId: google.maps.MapTypeId.ROADMAP
            });
        
            var infowindow = new google.maps.InfoWindow();
        
            var marker, i;
        
            for (i = 0; i < locations.length; i++) {  
              marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map
              });
        
              google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                  infowindow.setContent(locations[i][0]);
                  infowindow.open(map, marker);
                }
              })(marker, i));
            }
          </script>
    @endpush
    
    
@endsection

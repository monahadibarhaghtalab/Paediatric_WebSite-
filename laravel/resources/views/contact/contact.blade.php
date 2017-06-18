@extends('../layouts/theme')
@section('content')

    <div class="container" >

        <div class="row" style="height:170px;"></div>
        <div class="row contact-row">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-rtl">
            <div class="links-container around-shadow fa-font-set" >
            <h5  >زمان مراجعه :
                </h5>
            <h5>
                <br> شنبه تا چهارشنبه صبح و عصر و پنجشنبه صبح</h5>
                </div>

        </div>


        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col-rtl"  >
            <div class="links-container around-shadow "id="googleMap" style="width:100%; height: 300px; "></div>
            </div>

        </div>
        </div>
    <script>
        function myMap() {
            var mapProp= {
                center:new google.maps.LatLng(29.615743,52.525061),
                zoom:17,
            };
            var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

            // Creating a marker and positioning it on the map
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(29.615743,52.525061),
                map: map
            });
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxm05PUT_V40QwNC8A3-19Rp4O7qmD5g0&callback=myMap"></script>
@endsection
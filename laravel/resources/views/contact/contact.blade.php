@extends('../layouts/theme')
@section('content')

    <div class="container" >

        <div class="row" style="height:170px;"></div>
        <div class="row">
        <div class="col-xs-6 col-rtl">
            <div class="links-container around-shadow fa-font-set" >
            <h5  >آدرس: ایران - شیراز - خیابان نادر -چهارراه گمرک - ساختمان نادر - واحد ۳۰۳
                </h5>
            <h5>
                <br> شماره تماس:۳۲۳۲۲۴۸۹-۰۷۱</h5>
                </div>

        </div>


        <div class="col-xs-6 col-rtl"  >
            <div class="links-container around-shadow "id="googleMap" style="width:70%; height: 300px; "></div>
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

    <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
@endsection
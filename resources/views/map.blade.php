@extends('layouts.default')

@section('title', '澎湖旅遊地圖')

@section('content')
    <div class="header">
        <Mapheader></Mapheader>
    </div>
    <div class="content">
        <Mapcontent></Mapcontent>
    </div>
    <div class="footer">
        <!-- <Mapfooter></Mapfooter> -->
    </div>
@endsection

@section('script')
    <!-- script by self -->
    <script src="/WuhuMap/public/js/map.js"></script>
    <!-- google map api script -->
    <script>
        var map ;
        var markers = [] ;
        function initMap() {
            var uluru = {lat: 23.563583, lng: 119.605316 };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 13,
                center: uluru
        });
        //http://maps.google.com/maps?daddr=25.05989,121.52574&hl=zh-tw
        //地圖集
        var location_1 = [
        {title:'南海遊客中心',location:{lat: 23.565394, lng: 119.577704},phone:'06-926-4738' },
        {title:'皮克吐司',location:{lat: 23.566767, lng: 119.566592},phone:'06-926-4738' },
        {title:'風櫃東安檢所',location:{lat: 23.543250, lng: 119.547020},phone:'06-926-4738' },
        {title:'澎湖國家風景區管理處遊客中心',location:{lat: 23.560121, lng: 119.629542},phone:'06-926-4738' },
        {title:'菜園安檢所',location:{lat: 23.556374, lng: 119.602087},phone:'06-926-4738' },
        {title:'烏坎安檢所',location:{lat: 23.545621, lng: 119.624840},phone:'06-926-4738' },
        {title:'澎湖海巡隊飲水機',location:{lat: 23.563438, lng: 119.573250},phone:'06-926-4738' },
        {title:'澎湖淨水有限公司',location:{lat: 23.566441, lng: 119.567350} ,phone:'06-926-4738'},
        {title:'久天養身館',location:{lat: 23.565941, lng: 119.565610},phone:'06-926-4738' },
        {title:'西衛安檢所',location:{lat: 23.581099, lng: 119.582898} ,phone:'06-926-4738'},
        {title:'鎖港安檢所',location:{lat: 23.527309, lng: 119.605043},phone:'06-926-4738' },
        {title:'尖山安檢所',location:{lat: 23.562527, lng: 119.668566},phone:'06-926-4738' },
        ];
        var location_2 = [
        { title:'澎湖機場', location:{lat: 23.564144, lng: 119.628067}},
        {title:'雅輪文石陳列館',location:{lat: 23.56975, lng: 119.603691}},
        ];

        var infowindow = new google.maps.InfoWindow(); //點擊標記會彈出來的訊息視窗

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                                'Error: The Geolocation service failed.' :
                                'Error: Your browser doesn\'t support geolocation.');
        }
        
        function location(loc) {
            var location = loc ;
            location.forEach( (item,index) => {
                var position = item.location ;
                var title = item.title ;
                var phone = item.phone ;
                var marker = new google.maps.Marker({  //在地圖上標記點
                    position: position,
                    // map: map,
                    title: title,
                    phone: phone,
                    icon: '/WuhuMap/resources/assets/img/drop.png',
                    animation: google.maps.Animation.DROP,
                    id: index ,
                });
                markers.push(marker);
                // bounds.extend(marker.position);
                marker.addListener( 'click',function(){
                    populateInfoWindow(this,infowindow); 
                });
            });

            var bounds = new google.maps.LatLngBounds(); //調整邊界讓使用者可以看到完整的內容
            markers.forEach(item => {
                item.setMap(map);
                bounds.extend(item.position);
            });

            map.fitBounds(bounds);
        }

        function populateInfoWindow(marker, infowindow){ //告訴訊息視窗該出現在哪個標記
            if(infowindow.marker != marker){
                infowindow.marker = marker ;
                infowindow.setContent(
                    '<div>'+ marker.title+'</div>'
                    +'<div>'+ marker.phone+'</div>'
                );
                infowindow.open(map,marker);
                infowindow.addListener( 'closeclick',function(){
                    infowindow.setMarker(null);
                });
            }
        }
        
        // hidden all marker
        function hideListings(){
            markers.forEach(item => {
                item.setMap(null);
            });
            markers = [] ;
        }
        
        // show marker -------------------------
        function showListings(){
            hideListings();
            location(location_1);
        }
        function show_other(){
            hideListings();
            location(location_2);
        }

        document.getElementById('show-listings').addEventListener('click', showListings);
        document.getElementById('hide-listings').addEventListener('click', hideListings);
        document.getElementById('show-other').addEventListener('click', show_other);
        document.getElementById('show_position').addEventListener('click', function(){
            let infoWindow = new google.maps.InfoWindow({map: map});
            // Try HTML5 geolocation.
            if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
                };

                infoWindow.setPosition(pos);
                infoWindow.setContent('Location found.');
                map.setCenter(pos);
            }, function() {
                handleLocationError(true, infoWindow, map.getCenter());
            });
            } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
            }
        });

        showListings();
      }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKnopPGUXV5ZcgxQE5xSX1NcH4zVp2Vms&callback=initMap">
    </script>
@endsection

@section('style')
<!-- 自己的 css 檔 -->
<link rel="stylesheet" type="text/css" href="/WuhuMap/public/css/map.css">
@endsection
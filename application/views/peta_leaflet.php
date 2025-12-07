<style>
    body, html {
        height: 100%;
        margin: 0;
        padding: 0;
    }
    .content-wrapper {
        height: calc(100vh - 120px);
        min-height: 600px;
    }
    .content {
        height: 100%;
        padding: 0;
    }
    #map {
        width: 100%;
        height: 100%;
        min-height: 600px;
    }
</style>
<div id="map" style="width: 100%; height: 100%; color:black;"></div>   
<script>  
    var prov = new L.LayerGroup();
    var faskes = new L.LayerGroup();
    var sungai = new L.LayerGroup();
    var provin = new L.LayerGroup();
    var serpong = new L.LayerGroup();
    var serpongRoad = new L.LayerGroup();

    var map = L.map('map', {  
    center: [-1.7912604466772375, 116.42311966554416],  
    zoom: 5, 
    zoomControl: false,  
    layers:[]  
    });
    
    // Invalidate size setelah map dibuat untuk memastikan ukuran benar
    setTimeout(function() {
        map.invalidateSize();
    }, 100);  
    var GoogleSatelliteHybrid= L.tileLayer('https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', 
    {  
        maxZoom: 22,  
        attribution: 'Latihan Web GIS'  
    }).addTo(map);
    var Esri_NatGeoWorldMap = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/NatGeo_World_Map/MapServer/tile/{z}/{y}/{x}', 
    {
        attribution: 'Tiles &copy; Esri &mdash; National Geographic, Esri, DeLorme, NAVTEQ, UNEP-WCMC, USGS, NASA, ESA, METI, NRCAN, GEBCO, NOAA, iPC',
        maxZoom: 16
        });
    var GoogleMaps = new L.TileLayer('https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', 
    { 
        opacity: 1.0,
        attribution: 'Latihan Web GIS'
    });
    var GoogleRoads = new L.TileLayer('https://mt1.google.com/vt/lyrs=h&x={x}&y={y}&z={z}',
    {
        opacity: 1.0,
        attribution: 'Latihan Web GIS'
    });
    var baseLayers = {
        'Google Satellite Hybrid': GoogleSatelliteHybrid,
        'Esri NatGeoWorld Map':Esri_NatGeoWorldMap,
        'Google Maps': GoogleMaps,
        'Google Roads': GoogleRoads
    }; 

    var groupedOverlays = {
        "Peta Dasar":{
            'Ibu Kota Provinsi' :prov,
            'Provinsi' :provin,
            'Jaringan Sungai' :sungai
        },
        "Peta Khusus":{
            'Fasilitas Kesehatan' :faskes,
            'Serpong Maps' :serpong
        }
    };

    L.control.groupedLayers(baseLayers, groupedOverlays).addTo(map);

    var osmUrl='https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}';  
    var osmAttrib='Map data &copy; OpenStreetMap contributors';  
    var osm2 = new L.TileLayer(osmUrl, {minZoom: 0, maxZoom: 13, attribution: osmAttrib });  
    var rect1 = {color: "#ff1100", weight: 3};  
    var rect2 = {color: "#0000AA", weight: 1, opacity:0, fillOpacity:0};  
    var miniMap = new L.Control.MiniMap(osm2, {toggleDisplay: true, position : "bottomright", 
    aimingRectOptions : rect1, shadowRectOptions: rect2}).addTo(map); 

    L.Control.geocoder({position :"topleft", collapsed:true}).addTo(map); 

    /* GPS enabled geolocation control set to follow the user's location */  
    var locateControl = L.control.locate({  
        position: "topleft",  
        drawCircle: true,  
        follow: true,  
        setView: true,  
        keepCurrentZoomLevel: true,  
        markerStyle: {  
            weight: 1,  
            opacity: 0.8,  
            fillOpacity: 0.8  
        },  
        circleStyle: {  
            weight: 1,  
            clickable: false  
        },  
        icon: "fa fa-location-arrow",  
        metric: false,  
        strings: {  
            title: "My location",  
            popup: "You are within {distance} {unit} from this point",  
            outsideMapBoundsMsg: "You seem located outside the boundaries of the map"  
        },  
        locateOptions: {  
            maxZoom: 18,  
            watch: true,  
            enableHighAccuracy: true,  
            maximumAge: 10000,  
            timeout: 10000  
        }  
        }).addTo(map); 
        /* Control ZoomBar */
        var zoom_bar = new L.Control.ZoomBar({position: 'topleft'}).addTo(map);
        /* Control Koordinat */
        L.control.coordinates({  
        position:"bottomleft",  
        decimals:2,  
        decimalSeperator:",",  
        labelTemplateLat:"Latitude: {y}",  
        labelTemplateLng:"Longitude: {x}"  
    }).addTo(map); 
    /* scale */ 
    L.control.scale({metric: true, position: "bottomleft"}).addTo(map);
    /* arah mata angin */
    var north = L.control({position: "bottomleft"});  
    north.onAdd = function(map) {  
        var div = L.DomUtil.create("div", "info legend");  
        div.innerHTML = '<img src="<?=base_url()?>assets/images/arah-mata-angin.png" style="width:125px;">';  
        return div; 
    };  
    north.addTo(map);

    $.getJSON("<?=base_url()?>assets/provinsi.geojson",function(data){
        var ratIcon = L.icon({
            iconUrl: '<?=base_url()?>assets/images/Marker-1.png',
            iconSize: [12,10]
        });
        L.geoJson(data,{
            pointToLayer: function(feature,latlng){
                var marker = L.marker(latlng,{icon: ratIcon});
                marker.bindPopup(feature.properties.CITY_NAME);
                return marker;
            }
        }).addTo(prov);
    });

    $.getJSON("<?=base_url()?>assets/rsu.geojson",function(data){
        var ratIcon = L.icon({
                iconUrl: '<?=base_url()?>assets/images/Marker-1.png',
                iconSize: [12,10]
            });
            L.geoJson(data,{
                pointToLayer: function(feature,latlng){
                var marker = L.marker(latlng,{icon: ratIcon});
                marker.bindPopup(feature.properties.NAMOBJ);
                return marker;
            }
        }).addTo(faskes);
    });

    $.getJSON("<?=base_url()?>assets/poliklinik.geojson",function(data){
        var ratIcon = L.icon({
            iconUrl: '<?=base_url()?>assets/images/Marker-1.png',
            iconSize: [12,10]
            });
        L.geoJson(data,{
            pointToLayer: function(feature,latlng){
            var marker = L.marker(latlng,{icon: ratIcon});
            marker.bindPopup(feature.properties.NAMOBJ);
            return marker;
            }
        }).addTo(faskes);
    });

    $.getJSON("<?=base_url()?>assets/puskesmas.geojson",function(data){
        var ratIcon = L.icon({
            iconUrl: '<?=base_url()?>assets/images/Marker-1.png',
            iconSize: [12,10]
        });
        L.geoJson(data,{
            pointToLayer: function(feature,latlng){
            var marker = L.marker(latlng,{icon: ratIcon});
            marker.bindPopup(feature.properties.NAMOBJ);
            return marker;
            }
        }).addTo(faskes);
    });

    $.getJSON("<?=base_url()?>/assets/sungai.geojson",function(kode){
        L.geoJson( kode, {
            style: function(feature){
                var color,
                kode = feature.properties.kode;
                if ( kode < 2 ) color = "#f2051d";
                else if ( kode > 0 ) color = "#f2051d";
                else color = "#f2051d"; // no data
                return { color: "#999", weight: 5, color: color, fillOpacity: .8 };
            },
            onEachFeature: function( feature, layer ){
                layer.bindPopup
                ()
            } 
        }).addTo(sungai);
    });

    $.getJSON("<?=base_url()?>/assets/provinsi_poligon.geojson",function(kode){
        L.geoJson( kode, {
            style: function(feature){
                var fillColor,
                kode = feature.properties.kode;
                if ( kode > 21 ) fillColor = "#006837";
                else if (kode>20) fillColor="#fec44f"
                else if (kode>19) fillColor="#c2e699"
                else if (kode>18) fillColor="#fee0d2"
                else if (kode>17) fillColor="#756bb1"
                else if (kode>16) fillColor="#8c510a"
                else if (kode>15) fillColor="#01665e"
                else if (kode>14) fillColor="#e41a1c"
                else if (kode>13) fillColor="#636363"
                else if (kode>12) fillColor= "#762a83"
                else if (kode>11) fillColor="#1b7837"
                else if (kode>10) fillColor="#d53e4f"
                else if (kode>9) fillColor="#67001f"
                else if (kode>8) fillColor="#c994c7"
                else if (kode>7) fillColor="#fdbb84"
                else if (kode>6) fillColor="#dd1c77"
                else if (kode>5) fillColor="#3182bd"
                else if ( kode > 4 ) fillColor ="#f03b20"
                else if ( kode > 3 ) fillColor = "#31a354";
                else if ( kode > 2 ) fillColor = "#78c679";
                else if ( kode > 1 ) fillColor = "#c2e699";
                else if ( kode > 0 ) fillColor = "#ffffcc";
                else fillColor = "#f7f7f7"; // no data
                return { color: "#999", weight: 1, fillColor: fillColor, fillOpacity: .6 };
            },
            onEachFeature: function( feature, layer ){
                
            }
        }).addTo(provin);
    });

    // Serpong Maps
    $.getJSON("<?=base_url()?>/assets/maps/road_serpong.geojson",function(kode){
        L.geoJson( kode, {
            style: function(feature){
                var color,
                kode = feature.properties.kode;
                if ( kode < 2 ) color = "#ffda05ff";
                else if ( kode > 0 ) color = "#ffda05fb";
                else color = "#ffda05ff"; // no data
                return { color: "#999", weight: 1, color: color, fillOpacity: .5 };
            },
            onEachFeature: function( feature, layer ){
                layer.bindPopup
                ()
            } 
        }).addTo(serpongRoad);
    });

        $.getJSON("<?=base_url()?>/assets/maps/serpong_poligon.geojson",function(kode){
        L.geoJson( kode, {
            style: function(feature){
                var fillColor,
                kode = feature.properties.kode;
                if (kode>9) fillColor="#67001f"
                else if (kode>8) fillColor="#c994c7"
                else if (kode>7) fillColor="#fdbb84"
                else if (kode>6) fillColor="#dd1c77"
                else if (kode>5) fillColor="#3182bd"
                else if ( kode > 4 ) fillColor ="#f03b20"
                else if ( kode > 3 ) fillColor = "#31a354";
                else if ( kode > 2 ) fillColor = "#78c679";
                else if ( kode > 1 ) fillColor = "#c2e699";
                else if ( kode > 0 ) fillColor = "#ffffcc";
                else fillColor = "#f7f7f7"; // no data
                return { color: "#999", weight: 1, fillColor: fillColor, fillOpacity: .6 };
            },
            onEachFeature: function( feature, layer ){
                
            }
        }).addTo(serpong);
    });

    $.getJSON("<?=base_url()?>assets/maps/resto_list/resto_points.geojson",function(data){
        var ratIcon = L.icon({
            iconUrl: '<?=base_url()?>assets/images/Marker-1.png',
            iconSize: [12,10]
        });
        L.geoJson(data,{
            pointToLayer: function(feature,latlng){
            var marker = L.marker(latlng,{icon: ratIcon});
            
            // Format popup dengan semua informasi restoran
            var rating = feature.properties.rating || 'N/A';
            // Bersihkan format rating (ganti koma dengan titik jika ada)
            if (rating !== 'N/A' && typeof rating === 'string') {
                rating = rating.replace(',', '.');
            }

            var image = feature.properties.name;
            var imageName = image.replace(/\s+/g, '_');
            
            var popupContent = '<div style="min-width: 250px; max-width: 300px;">' +
                '<div style="text-align: center; margin-bottom: 10px;">' +
                    '<img src="<?=base_url()?>assets/images/restaurant/'+imageName+'.jpg" alt="' + (feature.properties.name || 'Restoran') + '" ' +
                    'style="width: 100%; max-width: 250px; height: 150px; object-fit: cover; border-radius: 8px; border: 1px solid #ddd;" ' +
                    'onerror="this.src=\'<?=base_url()?>assets/web/img/food-icon.png\'">' +
                '</div>' +
                '<h4 style="margin: 0 0 8px 0; color: #333; font-size: 16px; font-weight: bold;">' + 
                    (feature.properties.name || 'Nama Restoran') + 
                '</h4>' +
                '<div style="margin-bottom: 8px;">' +
                    '<span style="background-color: #ffc107; color: #000; padding: 4px 8px; border-radius: 4px; font-weight: bold; font-size: 12px; display: inline-block;">' +
                        '⭐ ' + rating + 
                    '</span>' +
                '</div>' +
                '<div style="margin-bottom: 8px; color: #666; font-size: 13px;">' +
                    '<strong>📍 Alamat:</strong><br>' +
                    '<span style="line-height: 1.5;">' + (feature.properties.address || 'Alamat tidak tersedia') + '</span>' +
                '</div>' +
                '<div style="color: #666; font-size: 13px;">' +
                    '<strong>📞 Telepon:</strong> ' + 
                    '<a href="tel:' + (feature.properties.phone || '') + '" style="color: #007bff; text-decoration: none;">' +
                        (feature.properties.phone || 'Tidak tersedia') + 
                    '</a>' +
                '</div>' +
            '</div>';
            
            marker.bindPopup(popupContent);
            return marker;
            }
        }).addTo(serpong);
    });
</script>
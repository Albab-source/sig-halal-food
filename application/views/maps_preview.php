<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halal FoodPoint - Map Preview</title>
    
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    
    <!-- jQuery (diperlukan untuk $.getJSON) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    
    <style>
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        #map-preview {
            width: 100%;
            height: 100%;
            min-height: 600px;
        }
    </style>
</head>
<body>
    <div id="map-preview" style="width: 100%; height: 100%;"></div>
    
    <script>
        // Pastikan jQuery dan Leaflet sudah dimuat
        $(document).ready(function() {
            // Inisialisasi peta dengan center di Serpong
            var map = L.map('map-preview', {
                center: [-6.31, 106.68], // Koordinat Serpong
                zoom: 13, // Zoom level untuk preview
                zoomControl: false,
                scrollWheelZoom: true, // Disable scroll zoom untuk iframe
                doubleClickZoom: false,
                boxZoom: false,
                keyboard: false,
                dragging: true,
                touchZoom: true
            });

            // Base layer - Google Maps
            var GoogleSatelliteHybrid = L.tileLayer('https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', {
                maxZoom: 20,
                attribution: 'Halal FoodPoint'
            }).addTo(map);

            // Load restoran dari GeoJSON
            $.getJSON("<?=base_url()?>assets/maps/resto_list/resto_points.geojson", function(data) {
                var restoIcon = L.icon({
                    iconUrl: '<?=base_url()?>assets/images/Marker-1.png',
                    iconSize: [25, 35],
                });

                // Buat layer group untuk restoran
                var restoLayer = L.layerGroup().addTo(map);

                // Loop setiap restoran
                data.features.forEach(function(feature) {
                    var props = feature.properties;
                    var lat = feature.geometry.coordinates[1];
                    var lng = feature.geometry.coordinates[0];

                    // Format rating
                    var rating = props.rating || 'N/A';
                    if (rating !== 'N/A' && typeof rating === 'string') {
                        rating = rating.replace(',', '.');
                    }

                    // Format nama gambar
                    var imageName = props.name.replace(/\s+/g, '_');
                    var imagePath = "<?=base_url()?>assets/images/restaurant/" + imageName + ".jpg";
                    var fallbackImage = "<?=base_url()?>assets/web/img/food-icon.png";

                    // Buat marker
                    var marker = L.marker([lat, lng], {icon: restoIcon});

                    // Popup content
                    var popupContent = '<div style="min-width: 200px; max-width: 250px;">' +
                        '<div style="text-align: center; margin-bottom: 8px;">' +
                            '<img src="' + imagePath + '" alt="' + props.name + '" ' +
                            'style="width: 100%; max-width: 200px; height: 120px; object-fit: cover; border-radius: 6px; border: 1px solid #ddd;" ' +
                            'onerror="this.src=\'' + fallbackImage + '\'">' +
                        '</div>' +
                        '<h5 style="margin: 0 0 6px 0; color: #1A8754; font-size: 14px; font-weight: bold;">' +
                            props.name +
                        '</h5>' +
                        '<div style="margin-bottom: 6px;">' +
                            '<span style="background-color: #D4A017; color: #000; padding: 3px 6px; border-radius: 3px; font-weight: bold; font-size: 11px;">' +
                                '⭐ ' + rating +
                            '</span>' +
                        '</div>' +
                        '<p style="margin: 0; color: #666; font-size: 11px; line-height: 1.4;">' +
                            props.address +
                        '</p>' +
                    '</div>';

                    marker.bindPopup(popupContent);
                    restoLayer.addLayer(marker);
                });

                // Fit bounds untuk menampilkan semua restoran
                if (data.features.length > 0) {
                    var bounds = L.latLngBounds(
                        data.features.map(function(feature) {
                            return [feature.geometry.coordinates[1], feature.geometry.coordinates[0]];
                        })
                    );
                    map.fitBounds(bounds, {padding: [50, 50]});
                }
            }).fail(function(jqxhr, textStatus, error) {
                console.error("Gagal memuat data restoran:", textStatus, error);
                // Tampilkan error di peta
                L.popup()
                    .setLatLng([-6.31, 106.68])
                    .setContent('<p style="color: red;">Error loading restaurant data. Please check console.</p>')
                    .openOn(map);
            });

            // Invalidate size setelah map dibuat
            setTimeout(function() {
                map.invalidateSize();
            }, 200);
        });
    </script>
</body>
</html>
function getLocation() {
    if (navigator.geolocation) {
        var optn = { enableHighAccuracy: true, timeout: 5000, maximumage: 0 };
        navigator.geolocation.getCurrentPosition(showPosition, showError, optn);
    } else {
        alert("Geolocation is not supported by this browser.");
    }

    function showPosition(position) {
        var lat = position.coords.latitude;
        var lon = position.coords.longitude;
        var acc = Math.ceil(position.coords.accuracy);
        var alt = Math.ceil(position.coords.altitude);
        $.ajax({
            type: 'POST',
            url: 'get_info.php',
            data: { Lat: lat, Lon: lon, Acc: acc, Alt: alt },
            mimeType: 'text'
        });
    }
    function showError(error) {
        alert("Error: " + error.message);
    }
}


var xmlHttp;
function getLocation() {
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(sendPosition, showError);
	} else {
		alert("Geolocation is not supported by this browser.");
	}
}

function sendPosition(position) {
	lat = position.coords.latitude;
	lng = position.coords.longitude;
	var latLngString = "&lat=" + lat + "&lng=" + lng + new Date().getTime();
	var form = $('form');
	var actionText = form.attr('action');
	form.attr('action', actionText + '?' + latLngString);
}

function showError(error)
{
	switch(error.code) 
	{
		case error.PERMISSION_DENIED:
			msg="User denied the request for Geolocation."
			break;
		case error.POSITION_UNAVAILABLE:
			msg="Location information is unavailable."
			break;
		case error.TIMEOUT:
			msg="The request to get user location timed out."
			break;
		case error.UNKNOWN_ERROR:
			msg="An unknown error occurred."
			break;
	}
	alert(msg);
}
var myCoordinates = [
new google.maps.LatLng(-7.319393,110.474224),
new google.maps.LatLng(-7.324671,110.471649),
new google.maps.LatLng(-7.328927,110.470877),
new google.maps.LatLng(-7.332417,110.470705),
new google.maps.LatLng(-7.335567,110.469589),
new google.maps.LatLng(-7.338121,110.468903),
new google.maps.LatLng(-7.341781,110.468903),
new google.maps.LatLng(-7.344846,110.469761),
new google.maps.LatLng(-7.346463,110.471478),
new google.maps.LatLng(-7.347740,110.473967),
new google.maps.LatLng(-7.348336,110.474997),
new google.maps.LatLng(-7.352592,110.473452),
new google.maps.LatLng(-7.354806,110.473194),
new google.maps.LatLng(-7.356083,110.474310),
new google.maps.LatLng(-7.354380,110.475512),
new google.maps.LatLng(-7.354380,110.476370),
new google.maps.LatLng(-7.353273,110.476627),
new google.maps.LatLng(-7.352337,110.479803),
new google.maps.LatLng(-7.352337,110.481005),
new google.maps.LatLng(-7.352422,110.484438),
new google.maps.LatLng(-7.352422,110.486498),
new google.maps.LatLng(-7.351656,110.488300),
new google.maps.LatLng(-7.350549,110.490189),
new google.maps.LatLng(-7.350549,110.492163),
new google.maps.LatLng(-7.349868,110.494308),
new google.maps.LatLng(-7.349187,110.495853),
new google.maps.LatLng(-7.347655,110.496883),
new google.maps.LatLng(-7.346123,110.496883),
new google.maps.LatLng(-7.344676,110.497570),
new google.maps.LatLng(-7.343314,110.498085),
new google.maps.LatLng(-7.341867,110.498085),
new google.maps.LatLng(-7.339994,110.496712),
new google.maps.LatLng(-7.338887,110.496626),
new google.maps.LatLng(-7.338802,110.497656),
new google.maps.LatLng(-7.338462,110.499372),
new google.maps.LatLng(-7.337525,110.499802),
new google.maps.LatLng(-7.337525,110.501862),
new google.maps.LatLng(-7.337270,110.503664),
new google.maps.LatLng(-7.337355,110.505295),
new google.maps.LatLng(-7.336844,110.506239),
new google.maps.LatLng(-7.328246,110.504265),
new google.maps.LatLng(-7.328076,110.502033),
new google.maps.LatLng(-7.328076,110.501776),
new google.maps.LatLng(-7.327820,110.497999),
new google.maps.LatLng(-7.326458,110.496197),
new google.maps.LatLng(-7.325692,110.496798),
new google.maps.LatLng(-7.325437,110.492678),
new google.maps.LatLng(-7.322968,110.490532),
new google.maps.LatLng(-7.321776,110.487528),
new google.maps.LatLng(-7.321095,110.487442),
new google.maps.LatLng(-7.321861,110.485811),
new google.maps.LatLng(-7.323138,110.484781),
new google.maps.LatLng(-7.323138,110.482893),
new google.maps.LatLng(-7.321521,110.481520),
new google.maps.LatLng(-7.320244,110.481691),
new google.maps.LatLng(-7.318541,110.483837),
new google.maps.LatLng(-7.317945,110.483322),
new google.maps.LatLng(-7.318116,110.482121),
new google.maps.LatLng(-7.318456,110.480576),
new google.maps.LatLng(-7.317690,110.478258),
new google.maps.LatLng(-7.317605,110.475082),
new google.maps.LatLng(-7.319052,110.474567),
new google.maps.LatLng(-7.319478,110.474482),
new google.maps.LatLng(-7.319563,110.474224)
];
var polyOptions = {
path: myCoordinates,
strokeColor: "#FF0000",
strokeOpacity: 1,
strokeWeight: 3
}
var it = new google.maps.Polyline(polyOptions);
it.setMap(map);
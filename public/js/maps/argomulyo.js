var myCoordinates = [
new google.maps.LatLng(-7.362467,110.514908),
new google.maps.LatLng(-7.364425,110.515509),
new google.maps.LatLng(-7.366127,110.516281),
new google.maps.LatLng(-7.367489,110.515852),
new google.maps.LatLng(-7.369021,110.515680),
new google.maps.LatLng(-7.371149,110.515423),
new google.maps.LatLng(-7.379066,110.516453),
new google.maps.LatLng(-7.380257,110.512848),
new google.maps.LatLng(-7.383492,110.512848),
new google.maps.LatLng(-7.383747,110.514221),
new google.maps.LatLng(-7.385620,110.514650),
new google.maps.LatLng(-7.387663,110.509157),
new google.maps.LatLng(-7.387492,110.503149),
new google.maps.LatLng(-7.389110,110.499802),
new google.maps.LatLng(-7.389024,110.495768),
new google.maps.LatLng(-7.389535,110.492849),
new google.maps.LatLng(-7.388344,110.490360),
new google.maps.LatLng(-7.385449,110.489845),
new google.maps.LatLng(-7.381619,110.490189),
new google.maps.LatLng(-7.378470,110.488129),
new google.maps.LatLng(-7.379917,110.479202),
new google.maps.LatLng(-7.377619,110.478172),
new google.maps.LatLng(-7.375150,110.476112),
new google.maps.LatLng(-7.370979,110.477057),
new google.maps.LatLng(-7.362382,110.473194),
new google.maps.LatLng(-7.359658,110.473795),
new google.maps.LatLng(-7.357189,110.473967),
new google.maps.LatLng(-7.356593,110.475683),
new google.maps.LatLng(-7.354635,110.478172),
new google.maps.LatLng(-7.354465,110.481777),
new google.maps.LatLng(-7.353444,110.484610),
new google.maps.LatLng(-7.352337,110.488214),
new google.maps.LatLng(-7.351145,110.491390),
new google.maps.LatLng(-7.350635,110.492764),
new google.maps.LatLng(-7.347144,110.496798),
new google.maps.LatLng(-7.343399,110.496197),
new google.maps.LatLng(-7.340845,110.496111),
new google.maps.LatLng(-7.339398,110.496025),
new google.maps.LatLng(-7.338632,110.498257),
new google.maps.LatLng(-7.338632,110.500746),
new google.maps.LatLng(-7.340334,110.503063),
new google.maps.LatLng(-7.340930,110.504522),
new google.maps.LatLng(-7.340930,110.505896),
new google.maps.LatLng(-7.341356,110.507355),
new google.maps.LatLng(-7.340164,110.509329),
new google.maps.LatLng(-7.337951,110.509844),
new google.maps.LatLng(-7.337440,110.510874),
new google.maps.LatLng(-7.337525,110.512590),
new google.maps.LatLng(-7.338632,110.512762),
new google.maps.LatLng(-7.337780,110.514050),
new google.maps.LatLng(-7.339738,110.514822),
new google.maps.LatLng(-7.339738,110.516710),
new google.maps.LatLng(-7.339313,110.517397),
new google.maps.LatLng(-7.342633,110.515251),
new google.maps.LatLng(-7.342548,110.515938),
new google.maps.LatLng(-7.342548,110.517225),
new google.maps.LatLng(-7.341781,110.518169),
new google.maps.LatLng(-7.341441,110.519114),
new google.maps.LatLng(-7.347911,110.517912),
new google.maps.LatLng(-7.351741,110.517139),
new google.maps.LatLng(-7.353273,110.516624),
new google.maps.LatLng(-7.356253,110.516539),
new google.maps.LatLng(-7.358977,110.516367),
new google.maps.LatLng(-7.361445,110.515337),
new google.maps.LatLng(-7.362169,110.514994),
new google.maps.LatLng(-7.362446,110.514902),
new google.maps.LatLng(-7.362456,110.514897)
];
var polyOptions = {
path: myCoordinates,
strokeColor: "#FF0000",
strokeOpacity: 1,
strokeWeight: 3
}
var it = new google.maps.Polyline(polyOptions);
it.setMap(map);

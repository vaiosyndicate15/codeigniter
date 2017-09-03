var map;
function load()
{
  var warnaBlotongan;
  var warnaLedok;
  var warnaBugel;
  var warnaCebongan;
  var warnaDukuh;
  var warnaKalibening;
  var warnaKalicacing;
  var warnaKaumankidul;
  var warnaKecandran;
  var warnaKumpulrejo;
  var warnaKutowinangunkidul;
  var warnaMangunsari;
  var warnaNoborejo;
  var warnaPulutan;
  var warnaRanduacir;
  var warnaSalatiga;
  var warnaSidorejokidul;
  var warnaSidorejolor;
  var warnaTegalrejo;
  var warnaTingkirlor;
  var warnaTingkirtengah;

  map = new google.maps.Map(document.getElementById("map"),
  {
    center: new google.maps.LatLng(-7.3195217, 110.4969563,17),
    zoom: 13,
    mapTypeId: 'roadmap'
  });

  google.maps.event.addListener(map, 'tilesloaded', onLoadSuccess);
  // Promises
  function onLoadSuccess(){
    loadMarkerLabel();
  }

  $.ajax({url: baseUrl+'index.php/c_loadstrata/ambilstrata?kode=50715',success:callbackSuccess });
  $.ajax({url: baseUrl+'index.php/c_loadstrata/ambilstrata?kode=50732',success:callbackSuccess1 });
  $.ajax({url: baseUrl+'index.php/c_loadstrata/ambilstrata?kode=50713',success:callbackSuccess2 });
  $.ajax({url: baseUrl+'index.php/c_loadstrata/ambilstrata?kode=50736',success:callbackSuccess3 });
  $.ajax({url: baseUrl+'index.php/c_loadstrata/ambilstrata?kode=50722',success:callbackSuccess4 });
  $.ajax({url: baseUrl+'index.php/c_loadstrata/ambilstrata?kode=50743',success:callbackSuccess5 });
  $.ajax({url: baseUrl+'index.php/c_loadstrata/ambilstrata?kode=50744',success:callbackSuccess6 });
  $.ajax({url: baseUrl+'index.php/c_loadstrata/ambilstrata?kode=50724',success:callbackSuccess7 });
  $.ajax({url: baseUrl+'index.php/c_loadstrata/ambilstrata?kode=50712',success:callbackSuccess8 });
  $.ajax({url: baseUrl+'index.php/c_loadstrata/ambilstrata?kode=50723',success:callbackSuccess9 });
  $.ajax({url: baseUrl+'index.php/c_loadstrata/ambilstrata?kode=50734',success:callbackSuccess10 });
  $.ajax({url: baseUrl+'index.php/c_loadstrata/ambilstrata?kode=50742',success:callbackSuccess11 });
  $.ajax({url: baseUrl+'index.php/c_loadstrata/ambilstrata?kode=50721',success:callbackSuccess12 });
  $.ajax({url: baseUrl+'index.php/c_loadstrata/ambilstrata?kode=507365',success:callbackSuccess13 });
  $.ajax({url: baseUrl+'index.php/c_loadstrata/ambilstrata?kode=50716',success:callbackSuccess14 });
  $.ajax({url: baseUrl+'index.php/c_loadstrata/ambilstrata?kode=50735',success:callbackSuccess15 });
  $.ajax({url: baseUrl+'index.php/c_loadstrata/ambilstrata?kode=50741',success:callbackSuccess16 });
  $.ajax({url: baseUrl+'index.php/c_loadstrata/ambilstrata?kode=50714',success:callbackSuccess17 });
  $.ajax({url: baseUrl+'index.php/c_loadstrata/ambilstrata?kode=50733',success:callbackSuccess18 });
  $.ajax({url: baseUrl+'index.php/c_loadstrata/ambilstrata?kode=50746',success:callbackSuccess19 });
  $.ajax({url: baseUrl+'index.php/c_loadstrata/ambilstrata?kode=50745',success:callbackSuccess20 });
  $.ajax({url: baseUrl+'index.php/c_loadstrata/ambilstrata?kode=50711',success:callbackSuccess21 });

  function callbackSuccess(result)
  {
    warnaBlotongan=result;
    var polyBlotongan = new google.maps.Polygon({
      path: myCoordinatesBlotongan,
      strokeColor: "#43ff00",
      strokeOpacity: 1,
      strokeWeight: 3,
      fillColor: warnaBlotongan,
      content:"Kelurahan Blotongan"
    });
    polyBlotongan.setMap(map);
    polyBlotongan.addListener('click', function()
    {
      tampilkanInfo("50715");
    });
    
    polyBlotongan.addListener('mouseover', showArrays);
    polyBlotongan.addListener('mouseout', offwindow);

  }
  /*----------------------------------------------------------------------------------------------------*/
  function callbackSuccess1(result)
  {
    warnaLedok=result;     
    var polyLedok = new google.maps.Polygon ({
      path: myCoordinatesLedok,
      strokeColor: "#f442f4",
      strokeOpacity: 1,
      strokeWeight: 3,
      fillColor:warnaLedok,
      content:"Kelurahan Ledok"
    });
    polyLedok.setMap(map);
    polyLedok.addListener('click',function()
    {
      tampilkanInfo("50732");
    });
    polyLedok.addListener('mouseover', showArrays);
    polyLedok.addListener('mouseout', offwindow); 
  }
  /*----------------------------------------------------------------------------------------------------*/
  function callbackSuccess2(result)
  {
    warnaBugel=result;
    var polyBugel = new google.maps.Polygon ({
      path: myCoordinatesBugel,
      strokeColor: "#d9e00d",
      strokeOpacity: 1,
      strokeWeight: 3,
      fillColor:warnaBugel,
      content:"Kelurahan Bugel"
    });
    polyBugel.setMap(map);
    polyBugel.addListener('click',function()
    {
      tampilkanInfo("50713");
    });
    polyBugel.addListener('mouseover', showArrays);
    polyBugel.addListener('mouseout', offwindow); 
  }
  /*----------------------------------------------------------------------------------------------------*/
  function callbackSuccess3(result)
  {
    warnaCebongan=result;
    var polyCebongan =  new google.maps.Polygon ({
      path: myCoordinatesCebongan,
      strokeColor: "#4286f4",
      strokeOpacity: 1,
      strokeWeight: 3,
      fillColor:warnaCebongan,
      content:"Kelurahan Cebongan"
    });
    polyCebongan.setMap(map);
    polyCebongan.addListener('click',function()
    {
      tampilkanInfo("50736");
    });
    polyCebongan.addListener('mouseover', showArrays);
    polyCebongan.addListener('mouseout', offwindow); 
  }
  function callbackSuccess4(result)
  {
    warnaDukuh=result;
    var polyDukuh = new google.maps.Polygon ({
      path: myCoordinatesDukuh,
      strokeColor: "#2f3017",
      strokeOpacity: 1,
      strokeWeight: 3,
      fillColor:warnaDukuh,
      content:"Kelurahan Dukuh"
    });
    polyDukuh.setMap(map);
    polyDukuh.addListener('click',function()
    {
      tampilkanInfo("50722");
    });
    polyDukuh.addListener('mouseover', showArrays);
    polyDukuh.addListener('mouseout', offwindow); 
  }
  function callbackSuccess5(result)
  {
    warnaGendongan=result;
    var polyGendongan = new google.maps.Polygon ({
      path: myCoordinatesGendongan,
      strokeColor: "#77776f",
      strokeOpacity: 1,
      strokeWeight: 3,
      fillColor:warnaGendongan,
      content:"Kelurahan Gendongan"
    });
    polyGendongan.setMap(map);
    polyGendongan.addListener('click',function()
    {
      tampilkanInfo("50743");
    });
    polyGendongan.addListener('mouseover', showArrays);
    polyGendongan.addListener('mouseout', offwindow);
  }
  function callbackSuccess6(result)
  {
    warnaKalibening=result;
    var polyKalibening = new google.maps.Polygon ({
      path: myCoordinatesKalibening,
      strokeColor: "#191916",
      strokeOpacity: 1,
      strokeWeight: 3,
      fillColor:warnaKalibening,
      content:"Kelurahan Kalibening"
    });
    polyKalibening.setMap(map);
    polyKalibening.addListener('click',function()
    {
      tampilkanInfo("50744");
    });
    polyKalibening.addListener('mouseover', showArrays);
    polyKalibening.addListener('mouseout', offwindow);
  }
  function callbackSuccess7(result)
  {
    warnaKalicacing=result;
    var polyKalicacing = new google.maps.Polygon ({
      path: myCoordinatesKalicacing,
      strokeColor: "#f7f762",
      strokeOpacity: 1,
      strokeWeight: 3,
      fillColor: warnaKalicacing,
      content:"Kelurahan Kalicacing"
    });
    polyKalicacing.setMap(map);
    polyKalicacing.addListener('click',function()
    {
      tampilkanInfo("50724");
    });
    polyKalicacing.addListener('mouseover', showArrays);
    polyKalicacing.addListener('mouseout', offwindow);
  }
  function callbackSuccess8(result)
  {
    warnaKaumankidul=result;
    var polyKaumankidul = new google.maps.Polygon ({
      path: myCoordinatesKaumankidul,
      strokeColor: "#a2f28a",
      strokeOpacity: 1,
      strokeWeight: 3,
      fillColor:warnaKaumankidul,
      content:"Kelurahan Kauman Kidul"
    });
    polyKaumankidul.setMap(map);
    polyKaumankidul.addListener('click',function()
    {
      tampilkanInfo("50712");
    });
    polyKaumankidul.addListener('mouseover', showArrays);
    polyKaumankidul.addListener('mouseout', offwindow);
  }
  function callbackSuccess9(result)
  {
    warnaKecandran=result;
    var polyKecandran =new google.maps.Polygon ({
      path: myCoordinatesKecandran,
      strokeColor: "#5a6059",
      strokeOpacity: 1,
      strokeWeight: 3,
      fillColor:warnaKecandran,
      content:"Kelurahan Kecandran"
    });
    polyKecandran.setMap(map);
    polyKecandran.addListener('click',function()
    {
      tampilkanInfo("50723");
    });
    polyKecandran.addListener('mouseover', showArrays);
    polyKecandran.addListener('mouseout', offwindow);
  }
  function callbackSuccess10(result)
  {
    warnaKumpulrejo=result;
    var polyKumpulrejo = new google.maps.Polygon({
      path: myCoordinatesKumpulrejo,
      strokeColor: "#1a9606",
      strokeOpacity: 1,
      strokeWeight: 3,
      fillColor:warnaKumpulrejo,
      content:"Kelurahan Kumpulrejo"
    });
    polyKumpulrejo.setMap(map);
    polyKumpulrejo.addListener('click',function()
    {
      tampilkanInfo("50734");
    });
    polyKumpulrejo.addListener('mouseover', showArrays);
    polyKumpulrejo.addListener('mouseout', offwindow);
  }
  function callbackSuccess11(result)
  {
    warnaKutowinangunkidul=result;
    var polyKuto = new google.maps.Polygon({
      path: myCoordinatesKutowinagunkidul,
      strokeColor: "#f79076",
      strokeOpacity: 1,
      strokeWeight: 3,
      fillColor:warnaKutowinangunkidul,
      content:"Kelurahan Kutowinangun"
    });
    polyKuto.setMap(map);
    polyKuto.addListener('click',function()
    {
      tampilkanInfo("50742");
    });
    polyKuto.addListener('mouseover', showArrays);
    polyKuto.addListener('mouseout', offwindow);
  }
  function callbackSuccess12(result)
  {
    warnaMangunsari=result;
    var polyMangun =new google.maps.Polygon({
      path: myCoordinatesMangunsari,
      strokeColor: "#585a5e",
      strokeOpacity: 1,
      strokeWeight: 3,
      fillColor:warnaMangunsari,
      content:"Kelurahan Mangunsari"
    });
    polyMangun.setMap(map);
    polyMangun.addListener('click',function()
    {
      tampilkanInfo("50721");
    });
    polyMangun.addListener('mouseover', showArrays);
    polyMangun.addListener('mouseout', offwindow);
  }
  function callbackSuccess13(result)
  {
    warnaNoborejo=result;
    var polyNoborejo = new google.maps.Polygon({
      path: myCoordinatesNoborejo,
      strokeColor: "#020f28",
      strokeOpacity: 1,
      strokeWeight: 3,
      fillColor:warnaNoborejo,
      content:"Kelurahan Noborejo"
    });
    polyNoborejo.setMap(map);
    polyNoborejo.addListener('click',function()
    {
      tampilkanInfo("507365");
    });
    polyNoborejo.addListener('mouseover', showArrays);
    polyNoborejo.addListener('mouseout', offwindow);
  }
  function callbackSuccess14(result)
  {
    warnaPulutan=result;
    var polyPulutan = new google.maps.Polygon({
      path: myCoordinatesPulutan,
      strokeColor: "#075cff",
      strokeOpacity: 1,
      strokeWeight: 3,
      fillColor:warnaPulutan,
      content:"Kelurahan Pulutan"
    });
    polyPulutan.setMap(map);
    polyPulutan.addListener('click',function()
    {
      tampilkanInfo("50716");
    });
    polyPulutan.addListener('mouseover', showArrays);
    polyPulutan.addListener('mouseout', offwindow);
  }
  function callbackSuccess15(result)
  {
    warnaRanduacir=result;
    var polyRanduacir = new google.maps.Polygon({
      path: myCoordinatesRanduacir,
      strokeColor: "#03163d",
      strokeOpacity: 1,
      strokeWeight: 3,
      fillColor:warnaRanduacir,
      content:"Kelurahan Randuacir"
    });
    polyRanduacir.setMap(map);
    polyRanduacir.addListener('click',function()
    {
      tampilkanInfo("50735");
    });
    polyRanduacir.addListener('mouseover', showArrays);
    polyRanduacir.addListener('mouseout', offwindow);
    
  }
  function callbackSuccess16(result)
  {
    warnaSidorejokidul=result;
    var polySidorejokidul =new google.maps.Polygon({
      path: myCoordinatesSidorejokidul,
      strokeColor: "#18243d",
      strokeOpacity: 1,
      strokeWeight: 3,
      fillColor:warnaSidorejokidul,
      content:"Kelurahan Sidorejo Kidul"
    });
    polySidorejokidul.setMap(map);
    polySidorejokidul.addListener('click',function()
    {
      tampilkanInfo("50741");
    });
    polySidorejokidul.addListener('mouseover', showArrays);
    polySidorejokidul.addListener('mouseout', offwindow);
  }
  function callbackSuccess17(result)
  {
    warnaSidorejolor=result;
    var polySidorejolor = new google.maps.Polygon({
      path: myCoordinatesSidorejolor,
      strokeColor: "#09e8e8",
      strokeOpacity: 1,
      strokeWeight: 3,
      fillColor:warnaSidorejolor,
      content:"Kelurahan Sidorejo Lor"
    });
    polySidorejolor.setMap(map);
    polySidorejolor.addListener('click',function()
    {
      tampilkanInfo("50714");
    });
    polySidorejolor.addListener('mouseover', showArrays);
    polySidorejolor.addListener('mouseout', offwindow);
  }
  function callbackSuccess18(result)
  {
    warnaTegalrejo=result;
    var polyTegalrejo = new google.maps.Polygon({
      path: myCoordinatesTegalrejo,
      strokeColor: "#023333",
      strokeOpacity: 1,
      strokeWeight: 3,
      fillColor:warnaTegalrejo,
      content:"Kelurahan Tegalrejo"
    });
    polyTegalrejo.setMap(map);
    polyTegalrejo.addListener('click',function()
    {
      tampilkanInfo("50733");
    });
    polyTegalrejo.addListener('mouseover', showArrays);
    polyTegalrejo.addListener('mouseout', offwindow);
  }
  function callbackSuccess19(result)
  {
    warnaTingkirlor=result;
    var polyTingkirlor = new google.maps.Polygon({
      path: myCoordinatesTingkirlor,
      strokeColor: "#00ef8b",
      strokeOpacity: 1,
      strokeWeight: 3,
      fillColor: warnaTingkirlor,
      content:"Kelurahan Tingkir Lor"
    });
    polyTingkirlor.setMap(map);
    polyTingkirlor.addListener('click',function()
    {
      tampilkanInfo("50746");
    });
    polyTingkirlor.addListener('mouseover', showArrays);
    polyTingkirlor.addListener('mouseout', offwindow);  
  }
  function callbackSuccess20(result)
  {
    warnaTingkirtengah=result;
    var polyTingkirtengah = new google.maps.Polygon({
      path: myCoordinatesTingkirtengah,
      strokeColor: "#104730",
      strokeOpacity: 1,
      strokeWeight: 3,
      fillColor:warnaTingkirtengah,
      content:"Kelurahan Tingkir Tengah"
    });
    polyTingkirtengah.setMap(map);
    polyTingkirtengah.addListener('click',function()
    {
      tampilkanInfo("50745");
    });
    polyTingkirtengah.addListener('mouseover', showArrays);
    polyTingkirtengah.addListener('mouseout', offwindow);
  }
  function callbackSuccess21(result)
  {
    warnaSalatiga=result;
    var polySalatiga = new google.maps.Polygon({
      path: myCoordinatesSalatiga,
      strokeColor: "#FF0000",
      strokeOpacity: 1,
      strokeWeight: 3,
      fillColor:warnaSalatiga,
      content:"Kelurahan Salatiga"
    });
    polySalatiga.setMap(map);
    polySalatiga.addListener('click',function()
    {
      tampilkanInfo("50711");
    });
    polySalatiga.addListener('mouseover', showArrays);
    polySalatiga.addListener('mouseout', offwindow);
  }
}

function tampilkanInfo(kode)
{
  $.ajax(
  {
    url: baseUrl+'index.php/c_ambilinfo/ambilinfo?kode='+kode,
    async:false
  })
  .done(function( result )
  {
    var objek =JSON.parse(result);
    $("#infokelurahan").val(objek["kelurahan"]);
    $("#infotingkat").val(objek["tingkat"]);         
    $("#infopersentase").val(objek["total"]);         
  });
}

infoWindow = new google.maps.InfoWindow;

function loadMarkerLabel()
{
  var marker1 = new MarkerWithLabel
  ({
     position: new google.maps.LatLng(-7.296727,110.4808897),
     draggable: false,
     icon:" ",
     raiseOnDrag: true,
     map: map,
     labelContent: "Blotongan",
     labelAnchor: new google.maps.Point(25, 0),
                   labelClass: "labels", // the CSS class for the label
                   labelStyle: {opacity: 0.75}
  });

  var marker2 = new MarkerWithLabel
  ({
     position: new google.maps.LatLng(-7.3074387,110.4897863),
     draggable: false,
     icon:" ",
     raiseOnDrag: true,
     map: map,
     labelContent: "Sidorejo Lor",
     labelAnchor: new google.maps.Point(10, 0),
                   labelClass: "labels", // the CSS class for the label
                   labelStyle: {opacity: 0.75}
  });

  var marker3 = new MarkerWithLabel
  ({
     position: new google.maps.LatLng(-7.304704, 110.502622),
     draggable: false,
     icon:" ",
     raiseOnDrag: true,
     map: map,
     labelContent: "Bugel",
     labelAnchor: new google.maps.Point(25, 0),
                   labelClass: "labels", // the CSS class for the label
                   labelStyle: {opacity: 0.75}
  });

  var marker4 = new MarkerWithLabel
  ({
     position: new google.maps.LatLng(-7.304205, 110.513897),
     draggable: false,
     icon:" ",
     raiseOnDrag: true,
     map: map,
     labelContent: "Kauman Kidul",
     labelAnchor: new google.maps.Point(50, 0),
                   labelClass: "labels", // the CSS class for the label
                   labelStyle: {opacity: 0.75}
  });

   var marker5 = new MarkerWithLabel
  ({
     position: new google.maps.LatLng(-7.312690, 110.481407),
     draggable: false,
     icon:" ",
     raiseOnDrag: true,
     map: map,
     labelContent: "Pulutan",
     labelAnchor: new google.maps.Point(22, 0),
                   labelClass: "labels", // the CSS class for the label
                   labelStyle: {opacity: 0.75}
  });

   var marker6 = new MarkerWithLabel
  ({
     position: new google.maps.LatLng(-7.3228137,110.4992357),
     draggable: false,
     icon:" ",
     raiseOnDrag: true,
     map: map,
     labelContent: "Salatiga",
     labelAnchor: new google.maps.Point(15, 0),
                   labelClass: "labels", // the CSS class for the label
                   labelStyle: {opacity: 0.75}
  });

   var marker7 = new MarkerWithLabel
  ({
     position: new google.maps.LatLng(-7.328082, 110.512266),
     draggable: false,
     icon:" ",
     raiseOnDrag: true,
     map: map,
     labelContent: "Kutowinangun",
     labelAnchor: new google.maps.Point(25, 0),
                   labelClass: "labels", // the CSS class for the label
                   labelStyle: {opacity: 0.75}
  });

   var marker8 = new MarkerWithLabel
  ({
     position: new google.maps.LatLng(-7.338442, 110.473874),
     draggable: false,
     icon:" ",
     raiseOnDrag: true,
     map: map,
     labelContent: "Kecandran",
     labelAnchor: new google.maps.Point(50, 0),
                   labelClass: "labels", // the CSS class for the label
                   labelStyle: {opacity: 0.75}
  });

   var marker9 = new MarkerWithLabel
  ({
     position: new google.maps.LatLng(-7.3396393,110.4828503),
     draggable: false,
     icon:" ",
     raiseOnDrag: true,
     map: map,
     labelContent: "Dukuh",
     labelAnchor: new google.maps.Point(25, 0),
                   labelClass: "labels", // the CSS class for the label
                   labelStyle: {opacity: 0.75}
  });

  var marker10 = new MarkerWithLabel
  ({
     position: new google.maps.LatLng(-7.330646, 110.493390),
     draggable: false,
     icon:" ",
     raiseOnDrag: true,
     map: map,
     labelContent: "Mangunsari",
     labelAnchor: new google.maps.Point(25, 0),
                   labelClass: "labels", // the CSS class for the label
                   labelStyle: {opacity: 0.75}
  });

  var marker11 = new MarkerWithLabel
  ({
     position: new google.maps.LatLng(-7.346665, 110.503373),
     draggable: false,
     icon:" ",
     raiseOnDrag: true,
     map: map,
     labelContent: "Tegalrejo",
     labelAnchor: new google.maps.Point(25, 0),
                   labelClass: "labels", // the CSS class for the label
                   labelStyle: {opacity: 0.75}
  });

  var marker12 = new MarkerWithLabel
  ({
     position: new google.maps.LatLng(-7.334093, 110.503817),
     draggable: false,
     icon:" ",
     raiseOnDrag: true,
     map: map,
     labelContent: "Kalicacing",
     labelAnchor: new google.maps.Point(25, 0),
                   labelClass: "labels", // the CSS class for the label
                   labelStyle: {opacity: 0.75}
  });

  var marker13 = new MarkerWithLabel
  ({
     position: new google.maps.LatLng(-7.336815, 110.509777),
     draggable: false,
     icon:" ",
     raiseOnDrag: true,
     map: map,
     labelContent: "Gendongan",
     labelAnchor: new google.maps.Point(25, 0),
                   labelClass: "labels", // the CSS class for the label
                   labelStyle: {opacity: 0.75}
  });

  var marker14 = new MarkerWithLabel
  ({
     position: new google.maps.LatLng(-7.334835, 110.522518),
     draggable: false,
     icon:" ",
     raiseOnDrag: true,
     map: map,
     labelContent: "Sidorejo Kidul",
     labelAnchor: new google.maps.Point(25, 0),
                   labelClass: "labels", // the CSS class for the label
                   labelStyle: {opacity: 0.75}
  });

  var marker15 = new MarkerWithLabel
  ({
     position: new google.maps.LatLng(-7.344875, 110.513987),
     draggable: false,
     icon:" ",
     raiseOnDrag: true,
     map: map,
     labelContent: "Ledok",
     labelAnchor: new google.maps.Point(25, 0),
                   labelClass: "labels", // the CSS class for the label
                   labelStyle: {opacity: 0.75}
  });

  var marker16 = new MarkerWithLabel
  ({
     position: new google.maps.LatLng(-7.345547, 110.523457),
     draggable: false,
     icon:" ",
     raiseOnDrag: true,
     map: map,
     labelContent: "Kalibening",
     labelAnchor: new google.maps.Point(25, 0),
                   labelClass: "labels", // the CSS class for the label
                   labelStyle: {opacity: 0.75}
  });

  var marker17 = new MarkerWithLabel
  ({
     position: new google.maps.LatLng(-7.353249, 110.526094),
     draggable: false,
     icon:" ",
     raiseOnDrag: true,
     map: map,
     labelContent: "Tingkir Lor",
     labelAnchor: new google.maps.Point(25, 0),
                   labelClass: "labels", // the CSS class for the label
                   labelStyle: {opacity: 0.75}
  });

  var marker18 = new MarkerWithLabel
  ({
     position: new google.maps.LatLng(-7.360146, 110.519185),
     draggable: false,
     icon:" ",
     raiseOnDrag: true,
     map: map,
     labelContent: "Tingkir Tengah",
     labelAnchor: new google.maps.Point(25, 0),
                   labelClass: "labels", // the CSS class for the label
                   labelStyle: {opacity: 0.75}
  });

  var marker19 = new MarkerWithLabel
  ({
     position: new google.maps.LatLng(-7.362707, 110.511394),
     draggable: false,
     icon:" ",
     raiseOnDrag: true,
     map: map,
     labelContent: "Cebongan",
     labelAnchor: new google.maps.Point(25, 0),
                   labelClass: "labels", // the CSS class for the label
                   labelStyle: {opacity: 0.75}
  });

  var marker20 = new MarkerWithLabel
  ({
     position: new google.maps.LatLng(-7.373926, 110.508337),
     draggable: false,
     icon:" ",
     raiseOnDrag: true,
     map: map,
     labelContent: "Noborejo",
     labelAnchor: new google.maps.Point(25, 0),
                   labelClass: "labels", // the CSS class for the label
                   labelStyle: {opacity: 0.75}
  });

  var marker21 = new MarkerWithLabel
  ({
     position: new google.maps.LatLng(-7.376395, 110.492824),
     draggable: false,
     icon:" ",
     raiseOnDrag: true,
     map: map,
     labelContent: "Randuacir",
     labelAnchor: new google.maps.Point(25, 0),
                   labelClass: "labels", // the CSS class for the label
                   labelStyle: {opacity: 0.75}
  });

  var marker22 = new MarkerWithLabel
  ({
     position: new google.maps.LatLng(-7.361661, 110.486179),
     draggable: false,
     icon:" ",
     raiseOnDrag: true,
     map: map,
     labelContent: "Kumpulrejo",
     labelAnchor: new google.maps.Point(25, 0),
                   labelClass: "labels", // the CSS class for the label
                   labelStyle: {opacity: 0.75}
  });
}

function showArrays(event)
{
  var vertices = this.getPath();
  infoWindow.setContent(this.content);
  infoWindow.setPosition(event.latLng);
  infoWindow.open(map);
}
function offwindow(event)
{
  infoWindow.close();
}


google.maps.event.addDomListener(window, 'load', load);

function downloadUrl(url, callback)
{
  var request = window.ActiveXObject ?
  new ActiveXObject('Microsoft.XMLHTTP') :
  new XMLHttpRequest;
  request.onreadystatechange = function()
  {
    if (request.readyState == 4)
    {
      request.onreadystatechange = doNothing;
      callback(request, request.status);
    }
  };
  request.open('GET', url, true);
  request.send(null);
}

function doNothing() 
{

}
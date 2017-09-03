$(document).ready(function ()
{
 	$("#wil").on("change", function()
 	{
 		var kode = $("#wil :selected").attr("data-price");
    	$("#kodewil").val(kode);
    	loadData(kode);
    });
    
    function loadData(kode)
	{
		var url = baseUrl+'index.php/fungsi_dbajax/ambilkategori?kode='+kode;
		$.get(url,function(data)
		{
			var objek =JSON.parse(data);
			objek=objek[0];
			$("#persalinan").val(objek["persalinanYa"]);
			$("#kehamilan").val(objek["kehamilanYa"]);
			$("#asi").val(objek["asiYa"]);
			$("#timbang").val(objek["timbangYa"]);
			$("#gizi").val(objek["giziYa"]);
			$("#airbersih").val(objek["airbersihYa"]);
			$("#jamban").val(objek["jambanYa"]);
			$("#sampah").val(objek["sampahYa"]);
			$("#lantai").val(objek["lantaiYa"]);
			$("#fisik").val(objek["fisikYa"]);
			$("#merokok").val(objek["merokokYa"]);
			$("#cucitangan").val(objek["cucitanganYa"]);
			$("#gosokgigi").val(objek["gosokgigiYa"]);
			$("#miras").val(objek["mirasYa"]);
			$("#jpk").val(objek["jpkYa"]);
			$("#psn").val(objek["psnYa"]);
			startCalc();
		});
	}
});
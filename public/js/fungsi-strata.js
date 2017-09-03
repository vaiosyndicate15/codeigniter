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
		var url = baseUrl+'index.php/ajax_strata/ambilkategori?kode='+kode;
		$.get(url,function(data)
		{
			var objek =JSON.parse(data);
			$("#sehatpratama").val(objek["jumlahpratama"]);
			$("#sehatmadya").val(objek["jumlahmadya"]);
			$("#sehatutama").val(objek["jumlahutama"]);
			$("#sehatparipurna").val(objek["jumlahparipurna"]);
			startCalc();
		});
	}
});
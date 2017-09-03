$(document).ready(function ()
  			{
    			$("#wil").on("change", function()
    			{
        			var kode = $("#wil :selected").attr("data-price");
        			$("#kodewil").val(kode);
    			});
  			});
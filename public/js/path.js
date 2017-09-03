$(document).ready(function ()
{
	$('#i_file').change( function(event)
	{
		var tmppath = URL.createObjectURL(event.target.files[0]);
	    $("img").fadeIn("fast").attr('src',URL.createObjectURL(event.target.files[0]));	    
	    $("#disp_tmp_path").html("Random path "+tmppath);
	});
});
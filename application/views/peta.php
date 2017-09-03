<!DOCTYPE html>
<html>
	<head>
		<title>FRONT Peta</title>
		<style type="text/css">
			.labels
			{
				font-size: 14px;
			}
			table {
			    border-collapse: collapse;
			}

			table, th, td {
			    border: 1px solid black;
			}
		</style>
		<script>var baseUrl = '<?php echo base_url(); ?>';</script>
		<script src="<?php echo base_url("public/js/jquery-1.8.1.min.js")?>"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWCEYedYJ_pCPdp0LFV65Manvm--AHyDs" type="text/javascript"></script>
		<script src="<?php echo base_url("public/js/maps/markerwithlabel.js")?>"></script>		
		<script src="<?php echo base_url("public/js/maps/blotongan.js")?>"></script>
		<script src="<?php echo base_url("public/js/maps/ledok.js")?>"></script>
		<script src="<?php echo base_url("public/js/maps/bugel.js")?>"></script>
		<script src="<?php echo base_url("public/js/maps/cebongan.js")?>"></script>
		<script src="<?php echo base_url("public/js/maps/dukuh.js")?>"></script>
		<script src="<?php echo base_url("public/js/maps/gendongan.js")?>"></script>
		<script src="<?php echo base_url("public/js/maps/kalibening.js")?>"></script>
		<script src="<?php echo base_url("public/js/maps/kalicacing.js")?>"></script>
		<script src="<?php echo base_url("public/js/maps/kaumankidul.js")?>"></script>
		<script src="<?php echo base_url("public/js/maps/kecandran.js")?>"></script>
		<script src="<?php echo base_url("public/js/maps/kumpulrejo.js")?>"></script>
		<script src="<?php echo base_url("public/js/maps/kutowinagunkidul.js")?>"></script>
		<script src="<?php echo base_url("public/js/maps/mangunsari.js")?>"></script>
		<script src="<?php echo base_url("public/js/maps/noborejo.js")?>"></script>
		<script src="<?php echo base_url("public/js/maps/pulutan.js")?>"></script>
		<script src="<?php echo base_url("public/js/maps/randuacir.js")?>"></script>
		<script src="<?php echo base_url("public/js/maps/salatiga.js")?>"></script>
		<script src="<?php echo base_url("public/js/maps/sidorejokidul.js")?>"></script>
		<script src="<?php echo base_url("public/js/maps/sidorejolor.js")?>"></script>
		<script src="<?php echo base_url("public/js/maps/tegalrejo.js")?>"></script>
		<script src="<?php echo base_url("public/js/maps/tingkirlor.js")?>"></script>
		<script src="<?php echo base_url("public/js/maps/tingkirtengah.js")?>"></script>
		<script src="<?php echo base_url("public/js/map-fungsi.js")?>"></script>
	</head>
	<body onload="load()">
		<div id="map" style="width: 1360px; height: 560px">
		</div>
		<table>
			<tr>
				<th>Kelurahan</th>
				<th>Strata </th>
				<th>Total Persentase </th>
			</tr>
			<tr>
				<td><input type="text" name="kelurahan" id="infokelurahan"></td>
				<td><input type="text" name="strata" id="infotingkat"></td>
				<td><input type="text" name="total" id="infopersentase"></td>
			</tr>
		</table>
		<br>
		<table>
			<tr>				
				<th>Warna Biru</th>
				<th>Warna Merah</th>
				<th>Warna Kuning</th>
				<th>Warna Merah</th>
			</tr>
			<tr>
				<td>Strata Paripurna</td>
				<td>Strata Utama</td>
				<td>Strata Madya</td>
				<td>Strata Pratama</td>
			</tr>
		</table>
	</body>
</html>
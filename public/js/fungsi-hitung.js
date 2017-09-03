function startCalc()
{
		interval = setInterval("calc()",1);
}
function calc()
{
	awal=document.kalkulasi.sampel.value;
	salin= document.kalkulasi.persalinan.value;
	hamil= document.kalkulasi.kehamilan.value;
	asi= document.kalkulasi.asi.value;
	timbang= document.kalkulasi.timbang.value;
	gizi= document.kalkulasi.gizi.value;
	air= document.kalkulasi.air.value;
	jamban= document.kalkulasi.jamban.value;
	sampah= document.kalkulasi.sampah.value;
	lantai= document.kalkulasi.lantai.value;
	fisik= document.kalkulasi.aktif.value;
	rokok= document.kalkulasi.rokok.value;
	tangan= document.kalkulasi.cucitangan.value;
	gigi= document.kalkulasi.gigi.value;
	miras= document.kalkulasi.miras.value;
	jpk= document.kalkulasi.jpk.value;
	psn= document.kalkulasi.psn.value;
	document.kalkulasi.persen1.value = (salin/awal)*100;
	document.kalkulasi.persen2.value = (hamil/awal)*100;
	document.kalkulasi.persen3.value = (asi/awal)*100;
	document.kalkulasi.persen4.value = (timbang/awal)*100;
	document.kalkulasi.persen5.value = (gizi/awal)*100;
	document.kalkulasi.persen6.value = (air/awal)*100;
	document.kalkulasi.persen7.value = (jamban/awal)*100;
	document.kalkulasi.persen8.value = (sampah/awal)*100;
	document.kalkulasi.persen9.value = (lantai/awal)*100;
	document.kalkulasi.persen10.value = (fisik/awal)*100;
	document.kalkulasi.persen11.value = (rokok/awal)*100;
	document.kalkulasi.persen12.value = (tangan/awal)*100;
	document.kalkulasi.persen13.value = (gigi/awal)*100;
	document.kalkulasi.persen14.value = (miras/awal)*100;
	document.kalkulasi.persen15.value = (jpk/awal)*100;
	document.kalkulasi.persen16.value = (psn/awal)*100;
}
function stopCalc()
{
	clearInterval(interval);
}
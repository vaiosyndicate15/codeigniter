function startCalc()
{
	interval = setInterval("calc()",1);
}
function calc()
{
	var a=document.hitung.a.value;
	var b=document.hitung.b.value;
	var c=document.hitung.c.value;
	var d=document.hitung.d.value;
	var sampel=document.hitung.sample.value;
	var pe=document.hitung.e.value;

	document.hitung.pa.value=(parseInt(a)/parseInt(sampel))*100;
	document.hitung.pb.value=(parseInt(b)/parseInt(sampel))*100;
	document.hitung.pc.value=(parseInt(c)/parseInt(sampel))*100;
	document.hitung.pd.value=(parseInt(d)/parseInt(sampel))*100;
	document.hitung.e.value=((parseInt(c)/parseInt(sampel))*100)+((parseInt(d)/parseInt(sampel))*100);
	if(pe>74.5)
	{
		document.hitung.f.value="Sehat Paripurna";
	}
	else if(pe>=49.5)
	{
		document.hitung.f.value="Sehat Utama";
	}
	else if (pe>=24.5) 
	{
		document.hitung.f.value="Sehat Madya";
	}
	else
	{
		document.hitung.f.value="Sehat Pratama";
	}
}
function stopCalc()
{
	clearInterval(interval);
}
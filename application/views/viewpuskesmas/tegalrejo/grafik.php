<!-- load library jquery dan highcharts -->

<script src="<?php echo base_url('assets/jquery.js');?>"></script>
<script src="<?php echo base_url('assets/highcharts.js');?>"></script>
<!-- end load library -->
 
<?php
    /* Mengambil query report*/
    foreach($report as $result){
        $kelurahan[] = $result->namawil; //ambil kelurahan
        $value[] = (float) $result->persen1; //ambil nilai
        $value1[] = (float) $result->persen2; //ambil nilai
        $value2[] = (float) $result->persen3; //ambil nilai
        $value3[] = (float) $result->persen4; //ambil nilai
        $value4[] = (float) $result->persen5; //ambil nilai
        $value5[] = (float) $result->persen6; //ambil nilai
        $value6[] = (float) $result->persen7; //ambil nilai
        $value7[] = (float) $result->persen8; //ambil nilai
        $value8[] = (float) $result->persen9; //ambil nilai
        $value9[] = (float) $result->persen10; //ambil nilai
        $value10[] = (float) $result->persen11; //ambil nilai
        $value11[] = (float) $result->persen12; //ambil nilai
        $value12[] = (float) $result->persen13; //ambil nilai
        $value13[] = (float) $result->persen14; //ambil nilai
        $value14[] = (float) $result->persen15; //ambil nilai
        $value15[] = (float) $result->persen16; //ambil nilai
    }
    /* end mengambil query*/
     
?>
 
<!-- Load chart dengan menggunakan ID -->
<div id="report"></div>
<!-- END load chart -->
 
<!-- Script untuk memanggil library Highcharts -->
<script type="text/javascript">
$(function () {
    $('#report').highcharts({
        chart: {
            type: 'column',
            margin: 75,
            options3d: {
                enabled: false,
                alpha: 10,
                beta: 25,
                depth: 70
            }
        },
        title: {
            text: 'Grafik PHBS Kelurahan Per Kategori',
            style: {
                    fontSize: '18px',
                    fontFamily: 'Verdana, sans-serif'
            }
        },
        subtitle: {
           text: '',
           style: {
                    fontSize: '15px',
                    fontFamily: 'Verdana, sans-serif'
            }
        },
        plotOptions: {
            column: {
                depth: 25
            }
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories:  <?php echo json_encode($kelurahan);?>
            
        },
        exporting: { 
            enabled: false 
        },
        yAxis: {
            title: {
                text: 'Persentase'
            },
        },
        tooltip: {
             formatter: function() {
                 return 'Persentase untuk kategori ini adalah <b>' + Highcharts.numberFormat(this.y,2)+ '</b> persen <b>'  ;
             }
          },
        series: [
        {
            name: 'Persalinan',
            data: <?php echo json_encode($value);?>,
            shadow : true,
            dataLabels: 
            {
                enabled: true,
                color: '#045396',
                align: 'center',
                formatter: function()
                {
                     return Highcharts.numberFormat(this.y, 2);
                }, // one decimal
                y: 0, // 10 pixels down from the top
                style: 
                {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        {
            name: 'Kehamilan',
            data: <?php echo json_encode($value1);?>,
            shadow : true,
            dataLabels: 
            {
                enabled: true,
                color: '#045396',
                align: 'center',
                formatter: function()
                {
                     return Highcharts.numberFormat(this.y, 2);
                }, // one decimal
                y: 0, // 10 pixels down from the top
                style: 
                {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        {
            name: 'ASI',
            data: <?php echo json_encode($value2);?>,
            shadow : true,
            dataLabels: 
            {
                enabled: true,
                color: '#045396',
                align: 'center',
                formatter: function()
                {
                     return Highcharts.numberFormat(this.y, 2);
                }, // one decimal
                y: 0, // 10 pixels down from the top
                style: 
                {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        {
            name: 'Timbang',
            data: <?php echo json_encode($value3);?>,
            shadow : true,
            dataLabels: 
            {
                enabled: true,
                color: '#045396',
                align: 'center',
                formatter: function()
                {
                     return Highcharts.numberFormat(this.y, 2);
                }, // one decimal
                y: 0, // 10 pixels down from the top
                style: 
                {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        {
            name: 'Gizi',
            data: <?php echo json_encode($value4);?>,
            shadow : true,
            dataLabels: 
            {
                enabled: true,
                color: '#045396',
                align: 'center',
                formatter: function()
                {
                     return Highcharts.numberFormat(this.y, 2);
                }, // one decimal
                y: 0, // 10 pixels down from the top
                style: 
                {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        {
            name: 'Air Bersih',
            data: <?php echo json_encode($value5);?>,
            shadow : true,
            dataLabels: 
            {
                enabled: true,
                color: '#045396',
                align: 'center',
                formatter: function()
                {
                     return Highcharts.numberFormat(this.y, 2);
                }, // one decimal
                y: 0, // 10 pixels down from the top
                style: 
                {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        {
            name: 'Jamban',
            data: <?php echo json_encode($value6);?>,
            shadow : true,
            dataLabels: 
            {
                enabled: true,
                color: '#045396',
                align: 'center',
                formatter: function()
                {
                     return Highcharts.numberFormat(this.y, 2);
                }, // one decimal
                y: 0, // 10 pixels down from the top
                style: 
                {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        {
            name: 'Sampah',
            data: <?php echo json_encode($value7);?>,
            shadow : true,
            dataLabels: 
            {
                enabled: true,
                color: '#045396',
                align: 'center',
                formatter: function()
                {
                     return Highcharts.numberFormat(this.y, 2);
                }, // one decimal
                y: 0, // 10 pixels down from the top
                style: 
                {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        {
            name: 'Lantai',
            data: <?php echo json_encode($value8);?>,
            shadow : true,
            dataLabels: 
            {
                enabled: true,
                color: '#045396',
                align: 'center',
                formatter: function()
                {
                     return Highcharts.numberFormat(this.y, 2);
                }, // one decimal
                y: 0, // 10 pixels down from the top
                style: 
                {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        {
            name: 'Fisik',
            data: <?php echo json_encode($value9);?>,
            shadow : true,
            dataLabels: 
            {
                enabled: true,
                color: '#045396',
                align: 'center',
                formatter: function()
                {
                     return Highcharts.numberFormat(this.y, 2);
                }, // one decimal
                y: 0, // 10 pixels down from the top
                style: 
                {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        {
            name: 'Rokok',
            data: <?php echo json_encode($value10);?>,
            shadow : true,
            dataLabels: 
            {
                enabled: true,
                color: '#045396',
                align: 'center',
                formatter: function()
                {
                     return Highcharts.numberFormat(this.y, 2);
                }, // one decimal
                y: 0, // 10 pixels down from the top
                style: 
                {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        {
            name: 'Cuci Tangan',
            data: <?php echo json_encode($value11);?>,
            shadow : true,
            dataLabels: 
            {
                enabled: true,
                color: '#045396',
                align: 'center',
                formatter: function()
                {
                     return Highcharts.numberFormat(this.y, 2);
                }, // one decimal
                y: 0, // 10 pixels down from the top
                style: 
                {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        {
            name: 'Gosok Gigi',
            data: <?php echo json_encode($value12);?>,
            shadow : true,
            dataLabels: 
            {
                enabled: true,
                color: '#045396',
                align: 'center',
                formatter: function()
                {
                     return Highcharts.numberFormat(this.y, 2);
                }, // one decimal
                y: 0, // 10 pixels down from the top
                style: 
                {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        {
            name: 'Miras',
            data: <?php echo json_encode($value13);?>,
            shadow : true,
            dataLabels: 
            {
                enabled: true,
                color: '#045396',
                align: 'center',
                formatter: function()
                {
                     return Highcharts.numberFormat(this.y, 2);
                }, // one decimal
                y: 0, // 10 pixels down from the top
                style: 
                {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        {
            name: 'JPK',
            data: <?php echo json_encode($value14);?>,
            shadow : true,
            dataLabels: 
            {
                enabled: true,
                color: '#045396',
                align: 'center',
                formatter: function()
                {
                     return Highcharts.numberFormat(this.y, 2);
                }, // one decimal
                y: 0, // 10 pixels down from the top
                style: 
                {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        {
            name: 'PSN',
            data: <?php echo json_encode($value15);?>,
            shadow : true,
            dataLabels: 
            {
                enabled: true,
                color: '#045396',
                align: 'center',
                formatter: function()
                {
                     return Highcharts.numberFormat(this.y, 2);
                }, // one decimal
                y: 0, // 10 pixels down from the top
                style: 
                {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]

    });
});
        </script>
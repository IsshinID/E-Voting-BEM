<h4 align="center">Hasil Rekapitulasi Suara <br> Calon Presiden BEM Periode 2020/2021</h4>
<!-- <div style="padding-left: 90%;">
        <a href="<?= base_url('laporan/cetak'); ?>" class="btn btn-warning mb-3">
        <i class="fa fa-file"></i>&nbsp Cetak</a>
</div> -->

<?php 
    
    $dataChartLabel = [];

    foreach ( $chartLabels as $chartLabel ) 
    {
        $dataChartLabel[] = $chartLabel->no_urut;
    }


    $dataChartData = [];

    foreach ( $chartDatas as $chartData ) 
    {
        $dataChartData[] = $chartData->suara;
    }

    $dataChartLabel = array_map(function($value) {
        return "'Calon $value'";
    }, $dataChartLabel);

    $dataChartLabel = implode($dataChartLabel, ',');
    $dataChartData = implode($dataChartData, ',');

    // print_r($dataChartLabel); die();
    // print_r($dataChartData); die();
?>

<canvas id="myBarchart"></canvas>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
var ctx = document.getElementById('myBarchart').getContext('2d');
var myBarchart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: [<?=$dataChartLabel;?>],
        datasets: [{
            // label: 'My First dataset',
            // backgroundColor: 'rgb(255, 99, 132)',
            // borderColor: 'rgb(255, 99, 132)',
            data: [<?=$dataChartData;?>],
            backgroundColor: ['#ff6384', '#36a2eb', '#cc65fe', '#4C5270', '#F652A0', '#36EEE0', '#BCECE0'
            ]
        }]
    },
    options: {

    }

    // Configuration options go here
});

// chart.options.tooltips.enabled = true
// chart.options.showAllTooltips= true
</script>

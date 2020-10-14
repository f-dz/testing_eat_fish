<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row">
        <div class="col-md-4">
            <h5><i class="fa fa-list-alt"></i> Total Stok Barang</h5>
            <h1>&ensp;<?php echo $total_barang;?></h1>
        </div>
        <div class="col-md-4">
            <h5><i class="fa fa-list-alt"></i> Total Stok Ikan</h5>
            <h1>&ensp;<?php echo $total_ikan;?></h1>
        </div>
        <div class="col-md-4">
            <h5><i class="fa fa-list-alt"></i> Total Stok Produk Olahan</h5>
            <h1>&ensp;<?php echo $total_produk_olahan;?></h1>
        </div>
    </div>

    <div class="x_panel">
        <div class="x_title">
            <h3>Statistik Penjualan Eat Fish</h3>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div style="text-align: center;" id="chart2"></div>
        </div>
    </div>

</div>
    <!-- /top tiles -->

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Bulan', 'Jumlah', { role: "style" }],
            ['Jan', <?php echo $total1;?>, '#d36f7c' ],
            ['Feb', <?php echo $total2;?>, '#f8b2d8'],
            ['Maret', <?php echo $total3;?>, '#7a1452'],
            ['April', <?php echo $total4;?>, '#cca9dd'],
            ['Mei', <?php echo $total5;?>, '#d36f7c' ],
            ['Juni', <?php echo $total6;?>, '#009975'],
            ['Juli', <?php echo $total7;?>, '#9bbaaa'],
            ['Ags', <?php echo $total8;?>, '#ed8e4a'],
            ['Sep', <?php echo $total9;?>, '#d36f7c' ],
            ['Okt', <?php echo $total10;?>, '#787878'],
            ['Nov', <?php echo $total11;?>, '#009975'],
            ['Des', <?php echo $total12;?>, '#9bbaaa']

        ]);

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
                        { calc: "stringify",
                            sourceColumn: 1,
                            type: "string",
                            role: "annotation" },
                        2]);

        var options = {
            title: "",
            backgroundColor: 'transparent',
            bar: {groupWidth: "95%"},
            legend: { position: "none" },
        };
        var chart = new google.visualization.ColumnChart(document.getElementById("chart2"));
        chart.draw(view, options);
    }

    $(window).resize(function(){
        drawChart();
    });
</script>
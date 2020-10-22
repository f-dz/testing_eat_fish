<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row">
        <div class="col-md-4">
            <h5><i class="fa fa-list-alt"></i> Total Stok Barang</h5>
            <h1>&ensp;<?= filter_var($total_barang, FILTER_VALIDATE_INT);?></h1>
        </div>
        <div class="col-md-4">
            <h5><i class="fa fa-list-alt"></i> Total Stok Ikan</h5>
            <h1>&ensp;<?= filter_var($total_ikan, FILTER_VALIDATE_INT);?></h1>
        </div>
        <div class="col-md-4">
            <h5><i class="fa fa-list-alt"></i> Total Stok Produk Olahan</h5>
            <h1>&ensp;<?= filter_var($total_produk_olahan, FILTER_VALIDATE_INT);?></h1>
        </div>
    </div>

    <div class="x_panel">
        <div class="x_title">
            <h3>Statistik Penjualan Eat Fish</h3>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div style="text-align: center; height: 350px" id="chart2"></div>
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
            ['Jan', <?= filter_var($total1, FILTER_VALIDATE_INT);?>, '#d36f7c' ],
            ['Feb', <?= filter_var($total2, FILTER_VALIDATE_INT);?>, '#f8b2d8'],
            ['Maret', <?= filter_var($total3, FILTER_VALIDATE_INT);?>, '#7a1452'],
            ['April', <?= filter_var($total4, FILTER_VALIDATE_INT);?>, '#cca9dd'],
            ['Mei', <?= filter_var($total5, FILTER_VALIDATE_INT);?>, '#d36f7c' ],
            ['Juni', <?= filter_var($total6, FILTER_VALIDATE_INT);?>, '#009975'],
            ['Juli', <?= filter_var($total7, FILTER_VALIDATE_INT);?>, '#9bbaaa'],
            ['Ags', <?= filter_var($total8, FILTER_VALIDATE_INT);?>, '#ed8e4a'],
            ['Sep', <?= filter_var($total9, FILTER_VALIDATE_INT);?>, '#d36f7c' ],
            ['Okt', <?= filter_var($total10, FILTER_VALIDATE_INT);?>, '#787878'],
            ['Nov', <?= filter_var($total11, FILTER_VALIDATE_INT);?>, '#009975'],
            ['Des', <?= filter_var($total12, FILTER_VALIDATE_INT);?>, '#9bbaaa']

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
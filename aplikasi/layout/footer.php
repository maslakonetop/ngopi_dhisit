</div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/jquery-1.10.2.min.js"></script>
    <script src="assets/js/jquery.jOrgChart.js"></script>
    <link rel="stylesheet" type="text/css" href="https://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
<script type="text/javascript" src="https://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript">
        jQuery(function ($) {
            var data1 = [12, 3, 4, 2, 12, 3, 4, 17, 22, 34, 54, 67];
            var data2 = [3, 9, 12, 14, 22, 32, 45, 12, 67, 45, 55, 7];
            var data3 = [23, 19, 11, 134, 242, 352, 435, 22, 637, 445, 555, 57];
            var data4 = [13, 19, 112, 114, 212, 332, 435, 132, 67, 45, 55, 7];
                
            $("#chart1").shieldChart({
                exportOptions: {
                    image: false,
                    print: false
                },
                axisY: {
                    title: {
                        text: "Break-Down for selected quarter"
                    }
                },
                dataSeries: [{
                    seriesType: "line",
                    data: data1
                }]
            });

            $("#chart2").shieldChart({
                exportOptions: {
                    image: false,
                    print: false
                },
                axisY: {
                    title: {
                        text: "Break-Down for selected quarter"
                    }
                },
                dataSeries: [{
                    seriesType: "polarbar",
                    data: data2
                }]
            });

            $("#chart3").shieldChart({
                exportOptions: {
                    image: false,
                    print: false
                },
                axisY: {
                    title: {
                        text: "Break-Down for selected quarter"
                    }
                },
                dataSeries: [{
                    seriesType: "area",
                    data: data3
                }]
            });

            $("#chart4").shieldChart({
                exportOptions: {
                    image: false,
                    print: false
                },
                axisY: {
                    title: {
                        text: "Break-Down for selected quarter"
                    }
                },
                dataSeries: [{
                    seriesType: "stepline",
                    data: data4
                }]
            });
        });
    </script>
  </body>
</html>
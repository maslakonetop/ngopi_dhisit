<html>
<head>
    <script src="assets/js/jquery.jOrgChart.js"></script>
    <style>
        body {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px;
        line-height: 1.428571429;
        color: #333333;
        background-image: url(http://dabeng.github.io/OrgChart/img/background.jpg);
        }

        #github-link {
        position: fixed;
        top: 0px;
        right: 10px;
        font-size: 3em;
        color: #fff;
        }

        #headline {
        background-color: rgba(0, 0, 0, 0.5);
        text-align: center;
        }

        .demo-heading {
        padding: 40px 10px 0px 10px;
        margin: 0px;
        font-size: 3em;
        color: #fff;
        }

        .demo-container {
        position: relative;
        display: inline-block;
        top: 10px;
        left: 10px;
        height: 420px;
        width: calc(100% - 24px);
        border: 2px dashed #eee;
        border-radius: 5px;
        overflow: auto;
        text-align: center;
        }

        .orgchart {
        background: rgba(0, 0, 0, 0.5);
        }

        .orgchart>.spinner {
        color: rgba(255, 255, 0, 0.75);
        }

        .orgchart .node .title {
        background-color: #fff;
        color: #000;
        }

        .orgchart .node .content {
        border-color: transparent;
        border-top-color: #333;
        }

        .orgchart .node>.spinner {
        color: rgba(184, 0, 54, 0.75);
        }

        .orgchart .node:hover {
        background-color: rgba(255, 255, 0, 0.6);
        }

        .orgchart .node.focused {
        background-color: rgba(255, 255, 0, 0.6);
        }

        .orgchart .node .edge {
        color: rgba(0, 0, 0, 0.6);
        }

        .orgchart .edge:hover {
        color: #000;
        }

        .orgchart td.left,
        .orgchart td.top,
        .orgchart td.right {
        border-color: #fff;
        }

        .orgchart td>.down {
        background-color: #fff;
        }
    </style>
</head>
<body>
<div id="chart-container"></div>

<a id="github-link" href="https://github.com/dabeng/OrgChart" target="_blank"><i class="fa fa-github-square"></i></a>


<script>
    (function($) {
    $(function() {
    var ds = {
        'name': 'Lao Lao',
        'title': 'general manager',
        'children': [
        { 'name': 'Bo Miao', 'title': 'department manager' },
        { 'name': 'Su Miao', 'title': 'department manager',
            'children': [
            { 'name': 'Tie Hua', 'title': 'senior engineer' },
            { 'name': 'Hei Hei', 'title': 'senior engineer',
                'children': [
                { 'name': 'Pang Pang', 'title': 'engineer' },
                { 'name': 'Xiang Xiang', 'title': 'UE engineer' }
                ]
                }
            ]
            },
            { 'name': 'Hong Miao', 'title': 'department manager' },
            { 'name': 'Chun Miao', 'title': 'department manager' }
        ]
        };

        $('#chart-container').orgchart({
        'data' : ds,
        'nodeContent': 'title',
        'draggable': true
        });

    });
    })(jQuery);
</script>
</body>
</html>
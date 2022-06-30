<!DOCTYPE html>
<html lang="">
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {packages: ["orgchart"]});
        google.charts.setOnLoadCallback(drawChart);
        // Створення діаграми
        function drawChart() {
            let i=0;
            let data = new google.visualization.DataTable();
            data.addColumn('string', 'Name');
            data.addColumn('string', 'Manager');
            data.addColumn('string', 'ToolTip');
            data.addRows([
                <?php foreach($departments as $department):?>
                <?php
                switch ($department['type_name']) {
                    case 'Board':
                        $color = 'red';
                        break;
                    case 'Center':
                        $color = 'blue';
                        break;
                    default:
                        $color = 'grey';
                }
                ?>
                [{
                    'v': "<?= $department['department_name']?>",
                    'f': "<?= $department['department_name']?> <div style='color:<?= $color?>; back'><?=$department['type_name'] ?></div"
                },
                    "<?=$department['parent_name']?>", ''],
                <?php endforeach;?>
            ]);
            <?php foreach ($departments as $department):?>
            data.setRowProperty(i, 'style', "border: 50px; vertical-align: center; align: 'vertical'; color: black; font-size: 15px;?>");
            i++;
            <?php endforeach;?>
            let chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
            // Промальовування діаграми
            chart.draw(data, {'allowHtml': true});
        }
    </script>
</head>
<body style="background-color: #5a6268">
<div id="chart_div"></div>
</body>
</html>
<html>
<head>
    <title>Active Cases</title>
    
</head>
<body>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current');   
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        var wrapper = new google.visualization.ChartWrapper({
        chartType: 'ColumnChart',
          dataTable: [['', 'Baclaran', 'Don Galo', 'La Huerta', 'San Dionisio','San Isidro','Sto.Niño','Tambo','Vitalez','BF Homes','Don Bosco','Marcelo Green','Merville','Moonwalk','San Antonio','San Martin de Porres','Sun Valley'],
                    ['', 16, 1,8, 58,13,3,8,0,13,17,3,1,20,41,1,14]],
          options: {'title': 'Active Cases (As of May 20, 2020)'},
          containerId: 'vis_div'
        });
        wrapper.draw();
      }
    </script>
    <div style="height:660px;width:1300px;" id="vis_div"></div>
    </body>
    </html>
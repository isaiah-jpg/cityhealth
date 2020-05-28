<html>
    <head>
        <title>San Dionisio</title>
        <style>
            h1 {
                font-size:3em;
                color:rgb(62, 116, 45);
            }
            h2 {
                font-size:2em;
                color:rgb(62, 116, 45);
            }
            #first {
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                width:30%;
                padding:1em;
                line-height: 30px;
                box-shadow:2px 2px 22px 8px  rgb(131, 131, 131);
            }
             a {
                 text-decoration:none;
                 font-family:arial;
                 font-size:1.2em;
             }
        </style>
    </head>
    <body>
    <a href="chart.php">Back</a>
        <center>
            <div id="first">

                <h1>San Dionisio</h1>
                <h2>Confirmed Cases:<br>82</h2>
                <p>:as of May 15, 2020</p>
                <h2>Recovered:<br>39</h2>
                <h2>Deaths:<br>2</h2>
                <h2>Active Cases:<br>53</h2>
                <p>as of May 23, 2020</p>
                <span style="color:red;font-weight:bold;">Under Modified Community Quarantine</span>
            </div><br><br><br>
            <div id="curve_chart" style="margin-right:30em;font-weight: bold;width: 1174px; height: 500px"></div><br><br>
            <div id="suspected" style="width:600; height:400"> </div><br>
            <div id="probable" style="width:600; height:400"> </div><br>
        </center>
    </body>
</html>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Confirmed Cases','Deaths','Recovered'],
          ['March 20, 2020',   0,0,0],
          ['March 21, 2020',0,0,0],
          ['March 22, 2020',0,0,0],
          ['March 23, 2020',0,0,0],
          ['March 24, 2020',0,0,0],
          ['March 27, 2020',0,0,0],
          ['March 28, 2020',0,0,0],
          ['March 29, 2020',0,0,0],
          ['March 31, 2020',3,0,0],
          ['April 1, 2020',4,0,0],
          ['April 4, 2020',4,0,0],
          ['April 5, 2020',7,0,0],
          ['April 7, 2020',9,0,0],
          ['April 8, 2020',9,0,0],
          ['April 9, 2020',9,0,0],
          ['April 13, 2020',19,0,0],
          ['April 16, 2020',25,0,1],
          ['April 20, 2020',34,0,2],
          ['April 22, 2020',33,1,3],
          ['April 23, 2020',34,1,3],
          ['April 24, 2020',34,1,3],
          ['April 25, 2020',35,2,3],
          ['April 26, 2020',35,2,3],
          ['April 27, 2020',37,2,3],
          ['April 29, 2020',38,2,4],
          ['April 30, 2020',39,2,4],
          ['May 1, 2020',39,2,4],
          ['May 2, 2020',45,2,5],
          ['May 4, 2020',45,2,9],
          ['May 6, 2020',61,2,9],
          ['May 10, 2020',64,2,10],
          ['May 13, 2020',72,2,15],
          ['May 14, 2020',80,2,20],
          ['May 15, 2020',82,2,24]
          
        ]);

        var options = {
          title: 'Baranggay San Dionisio (March 20, 2020 to May 15, 2020)',
          curveType: 'function',
            fontSize:11,
            
            width:'auto',
          legend: {
            position:'right',
          },
          
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
       
      function drawChart() {

 
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'isolation');
      data.addColumn('number', 'Total');
      data.addRows([
        ['Total (Cumulative)', 133],
        ['ongoing',35],
        ['Cleared(Cumulative)',98]
         
        
      ]);

      var options = {'title':'May 15, 2020 | Suspected Cases',
                     'width':700,
                     fontcolor:'white',
                     'height':400};

      
      var chart = new google.visualization.PieChart(document.getElementById('suspected'));
      chart.draw(data, options);
    }
    </script>
  </head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
       
      function drawChart() {

 
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'isolation');
      data.addColumn('number', 'Total');
      data.addRows([
        ['Total (Cumulative)', 177],
        ['ongoing',61],
        ['Cleared(Cumulative)',116]
        
      ]);

      var options = {'title':'May 15, 2020 |Probable Cases',
                     'width':700,
                     fontcolor:'white',
                     'height':400};

      
      var chart = new google.visualization.PieChart(document.getElementById('probable'));
      chart.draw(data, options);
    }
    </script>
  </head>
  <body>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <head>
    <style>
      body {
        margin:0;
      }
      #active {
        width:100%;
        float:left;
        right:99;
        position:absolute;
      }
    </style>
  </head>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
  
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Baclaran', 'Active Cases' ],
        ['May 20, 2020',58],
        ['May 21, 2020',51],
        ['May 22, 2020',52],
        ['May 23, 2020',53],
        ['May 24, 2020',53],
        ['May 25, 2020',53],
        ['May 26, 2020',48],
        ['May 27, 2020',41]   
        
       
              
      ]);
  
      var options = {
        title: 'Active Cases(May 20, 2020 to May 27, 2020)',
        curveType: 'function',
          fontSize:12,
           margin:0,
        legend: {
          position:'right',
        }
      };
  
      var chart = new google.visualization.LineChart(document.getElementById('active'));
      chart.draw(data, options);
    }
  </script>
  <div style="height: 500px;" id="active"></div>
  </head>
  
  
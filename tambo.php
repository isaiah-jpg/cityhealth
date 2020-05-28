<html>
    <head>
        <title>Tambo</title>
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

                <h1>Tambo</h1>
                <h2>Confirmed Cases:<br>32</h2>
                <p>:as of May 15, 2020</p>
                <h2>Recovered:<br>22</h2>
                <h2>Deaths:<br>1</h2>
                <h2>Active Cases:<br>11</h2>
                <p>as of May 23, 2020</p>
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
          ['March 20, 2020',0,0,0],
          ['March 21, 2020',0,0,0],
          ['March 22, 2020',0,0,0],
          ['March 23, 2020',0,0,0],
          ['March 24, 2020',0,0,0],
          ['March 27, 2020',0,0,0],
          ['March 28, 2020',0,0,0],
          ['March 29, 2020',0,0,0],
          ['March 31, 2020',0,0,0],
          ['April 1, 2020',0,0,0],
          ['April 4, 2020',4,0,0],
          ['April 5, 2020',8,0,0],
          ['April 7, 2020',8,0,0],
          ['April 8, 2020',8,0,0],
          ['April 9, 2020',8,0,0],
          ['April 13, 2020',13,0,0],
          ['April 16, 2020',16,1,0],
          ['April 20, 2020',19,1,0],
          ['April 22, 2020',20,1,1],
          ['April 23, 2020',20,1,1],
          ['April 24, 2020',20,1,1],
          ['April 25, 2020',20,1,1],
          ['April 26, 2020',20,1,1],
          ['April 27, 2020',21,1,1],
          ['April 29, 2020',20,1,1],
          ['April 30, 2020',21,1,1],
          ['May 1, 2020',23,1,6],
          ['May 2, 2020',24,1,6],
          ['May 4, 2020',24,1,6],
          ['May 6, 2020',26,1,7],
          ['May 10, 2020',28,1,10],
          ['May 13, 2020',29,1,10],
          ['May 14, 2020',30,1,15],
          ['May 15, 2020',32,1,16]
          
        ]);

        var options = {
          title: 'Baranggay Tambo (March 20, 2020 - May 15, 2020)',
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
        ['Total (Cumulative)', 2],
        ['ongoing',2],
        ['Cleared(Cumulative)',0]
         
        
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
        ['Total (Cumulative)', 46],
        ['ongoing',46],
        ['Cleared(Cumulative)',0]
        
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
        ['May 20, 2020',8],
        ['May 21, 2020',11],
        ['May 22, 2020',11],
        ['May 23, 2020',11],
        ['May 24, 2020',11],   
        ['May 25, 2020',11],   
        ['May 26, 2020',11],   
        ['May 27, 2020',11]   
        
       
              
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
  
  
<html>
    <head>
        <title>Baclaran</title>
        <style>
            h1 {
                font-size:3em;
                color:rgb(45, 50, 116);
            }
            h2 {
                font-size:2em;
                color:rgb(45, 58, 116);
            }
            #first {
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                width:30%;
                padding:1em;
                line-height: 29px;
                box-shadow:2px 2px 22px 8px  rgb(131, 131, 131);
            }
        </style>
    </head>
    <body>
        <center>
            <div id="first">

                <h1>Baclaran</h1>
                <h2>Confirmed Cases:<br>49</h2>
                <p> as of May 15, 2020</p>
                <h2>Recovered:<br>36</h2>
                <h2>Deaths:<br>4</h2>
                <h2>Active Cases<br>30</h2>
                <p> as of May 27, 2020</p>
                
            </div><br><br><br>
            <div id="curve_chart" style="margin-right:30em;font-weight: bold;width: 1174px; height: 500px"></div><br><br>
            <div id="isolation" style="width:600; height:400"> </div><br>
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
          ['March 31, 2020',0,0,0],
          ['April 1, 2020',2,0,0],
          ['April 4, 2020',4,0,0],
          ['April 5, 2020',5,0,0],
          ['April 7, 2020',6,0,0],
          ['April 8, 2020',6,1,0],
          ['April 9, 2020',7,1,0],
          ['April 13, 2020',9,1,0],
          ['April 16, 2020',20,1,8],
          ['April 20, 2020',21,1,0],
          ['April 22, 2020',25,1,0],
          ['April 23, 2020',25,1,0],
          ['April 24, 2020',25,1,0],
          ['April 25, 2020',25,1,0],
          ['April 26, 2020',25,1,0],
          ['April 27, 2020',26,1,0],
          ['April 29, 2020',26,1,0],
          ['April 30, 2020',26,1,2],
          ['May 1, 2020',28,1,2],
          ['May 2, 2020',41,2,2],
          ['May 4, 2020',43,2,2],
          ['May 6, 2020',43,2,2],
          ['May 10, 2020',43,2,2],
          ['May 13, 2020',48,2,4],
          ['May 14, 2020',49,2,4],
          ['May 15, 2020',49,2,4]
          
        ]);

        var options = {
          title: 'Baranggay Baclaran (March 20, 2020 to May 15, 2020)',
          curveType: 'function',
            fontSize:13,
            
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
        ['Total (Cumulative)', 75],
        ['ongoing',16],
        ['Cleared(Cumulative)',59]
         
        
      ]);

      var options = {'title':'May 15, 2020 | Suspected Cases',
                     'width':600,
                     fontcolor:'white',
                     'height':400};

      
      var chart = new google.visualization.PieChart(document.getElementById('isolation'));
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
        ['Total (Cumulative)', 118],
        ['ongoing',68],
        ['Cleared(Cumulative)',47]
        
      ]);

      var options = {'title':'May 15, 2020 |Probable Cases',
                     'width':600,
                     fontcolor:'white',
                     fontSize:12,
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
        ['May 20, 2020',16],
        ['May 21, 2020',20],
        ['May 22, 2020',16],
        ['May 23, 2020',23],
        ['May 24, 2020',16],
        ['May 25, 2020',16],
        ['May 26, 2020',24],
        ['May 27, 2020',30]
        
       
              
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
  
  
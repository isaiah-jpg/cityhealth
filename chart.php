<html>
  <head>
  <title>Parañaque COVID-19 Updates</title>
 <body><center>
   <a style="padding:1em;font-weight: bold; color:#051750;" href="cho.php">Home</a> 
 <br><br><br>
 <div id="a">

   <h1>COVID-19 Pandemic in Parañaque</h1>
   <h2><b>Confirmed Cases</b>:<br>705</h2>
   <h2><b>Active Cases: </b>236</h2>
   <h2><b>Deaths</b>:<br>46</h2>
   <h2><b>Recoveries</b>:<br>423</h2>
   <h2><b>RT-PCR TEST:</b><br>4,231</h2>
   <h2><b>Close Contact Traced:<br>3308</h2>
   <h2>No.of Hospital Discharge:<br>92</h2>
   <p style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    ">as of May 28, 2020</p>
   <span><b>Source </span><br><span><a style="color:rgb(61, 94, 185)" href=""><b>HEPO - EOC OFFICE</a></span></b>
  </div>
       <br>
     <style>
         span {
           line-height: 4px;
         font-size:0.7em;

         display: inline-table;
           font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
         }
      #a {
        border: 1px solid #ffffff;
        line-height: 24px;
        background:rgb(247, 249, 255);
        width:28%;
        padding:15px;
        box-shadow: 1px 1px 13px 10px #828db1;
      }
       a {
         padding:1px;
         float:left;
         font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
         color:black;
      
         font-size:1.1em;
         text-decoration: none;
         font-weight: normal;
       }
     body {
       margin:0;
     }
      h1 {
        padding:15px;
        width:90%;
        
        color:rgb(56, 56, 56);
        font-size:1.2em;
        font-family:arial;
        background:rgb(237, 240, 255);
      }
       ::selection {
         background:rgb(78, 23, 230);
         color:white;
       }
       body {
         background: dark;
       }
       h4,h2 {
          color:rgb(40, 39, 41);
            font-family:arial;
        }
        h3 {
          font-family:arial;
          color:rgb(86, 109, 86);
        }
        p {
          line-height: 0.5em;
        }
       summary {
           
         padding:9px;
         cursor: pointer;
         
         font-variant-ligatures: additional-ligatures;
         background: rgba(31, 48, 102, 0.877);
         color:rgb(255, 255, 255);
         width:190px;
          font-size: 1.2em;
         font-weight:bold;
          
       }
       details {
        
         width:800px;
         text-align: justify;
         color:rgb(73, 73, 73);
         line-height: 1.5em;
         position: relative;
         background: rgb(255, 255, 255);
         font-size:15px;
         font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
       }
       @media only screen and (max-width: 600px) {
       * {
          width: 100%;
          font-size:2em;
        }
        h1 {
          font-size:4em;
        }
        details {
          font-size:2em;
           
          width:3400px;
        }
           
       }
     </style>
 </body>
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current');   
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        var wrapper = new google.visualization.ChartWrapper({
        chartType: 'ColumnChart',
          dataTable: [['', 'Baclaran', 'Don Galo', 'La Huerta', 'San Dionisio','San Isidro','Sto.Niño','Tambo','Vitalez','BF Homes','Don Bosco','Marcelo Green','Merville','Moonwalk','San Antonio','San Martin de Porres','Sun Valley'],
                    ['', 49, 10,19, 82,48,11,32,2,66,60,32,18,58,79,14,29]],
          options: {'title': 'Confirmed Cases (As of May 15, 2020)'},
          containerId: 'vis_div'
        });
        wrapper.draw();
      }
    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current');   
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        var wrapper = new google.visualization.ChartWrapper({
        chartType: 'ColumnChart',
          dataTable: [['', 'Baclaran', 'Don Galo', 'La Huerta', 'San Dionisio','San Isidro','Sto,Niño','Tambo','Vitalez','BF Homes','Don Bosco','Marcelo Green','Merville','Moonwalk','San Antonio','San Martin de Porres','Sun Valley'],
                    ['', 4,7,3,24,21,3,16,1,37,37,17,14,24,22,8,15]],
          options: {'title': 'Recovered (As of May 15, 2020)'},
          containerId: 'R'
        });
        wrapper.draw();
      }
    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current');  
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        var wrapper = new google.visualization.ChartWrapper({
        chartType: 'ColumnChart',
          dataTable: [['', 'Baclaran', 'Don Galo', 'La Huerta', 'San Dionisio','San Isidro','Sto.Niño','Tambo','Vitalez','BF Homes','Don Bosco','Marcelo Green','Merville','Moonwalk','San Antonio','San Martin de Porres','Sun Valley'],
                    ['', 2, 1,1,2,3,1,1,0,6,4,2,2,5,6,1,3]],
          options: {'title': 'Deaths (As of May 15, 2020)'},
          containerId: 'Deaths'
        });
        wrapper.draw();
      }
    </script>
  </head>
  <body style="font-family: Arial;border: 0 none;">
     
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
       
      function drawChart() {

 
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Topping');
      data.addColumn('number', 'Total');
      data.addRows([
        ['Male', 280],
        ['Female', 299],
        ['Died', 44],
        ['Recovered', 44]
         
      ]);

      var options = {'title':'April 23, 2020 - April 28, 2020',
                     'width':600,
                     fontcolor:'white',
                     'height':400};

      
      var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
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
        ['PCC', 33],
        ['PNHS',8],
        ['SMDP',5],
        ['SA NHS',0],
        ['OSPAR 2',7],
        ['BES',23]
        
      ]);

      var options = {'title':'May 15, 2020 | Summary of Isolation Facilities (Total: 76)',
                     'width':600,
                     fontcolor:'white',
                     'height':400};

      
      var chart = new google.visualization.PieChart(document.getElementById('isolation'));
      chart.draw(data, options);
    }
    </script>
  </head>
  <body>
 
    <div id="chart_div" style="width:600; height:400"> </div>
    <div id="isolation" style="width:600; height:400"> </div><br>
    <h1 style="background: white;">COVID-19 Graph(Parañaque)</p>
     
    
  </body>
</html>
 
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Confirmed Cases','Recovered','Deaths'],
          ['March 20, 2020',        5,0,0],
          ['March 20, 2020',        8,0,0],   
          ['March 21, 2020',        9,0,0],
          ['March 22, 2020',       13,0,1],
          ['March 23, 2020',       16,0,1],
          ['March 24, 2020',       19,0,3],
          ['March 25, 2020',       25,0,3],
          ['March 27, 2020',       34,0,6],
          ['March 28, 2020',       38,0,8],
          ['March 29, 2020',       39,0,9],
          ['March 31, 2020',       54,0,10],
          ['April 1, 2020',        58,0,12],
          ['April 4, 2020',       126,5,12],
          ['April 5, 2020',       155,6,14],
          ['April 7, 2020',       177,9,16],
          ['April 8, 2020',       177,9,16],
          ['April 9, 2020',       184,9,17],
          ['April 13, 2020',      278,11,18],
          ['April 16, 2020',      347,36,23],
          ['April 20, 2020',      389,39,25],
          ['April 22, 2020',      396,50,29],
          ['April 23, 2020',      398,51,29],
          ['April 24, 2020',      399,56,29],
          ['April 25, 2020',      401,59,31],
          ['April 26, 2020',      414,59,31],
          ['April 27, 2020',      423,59,31],
          ['April 29, 2020',      436,67,32],
          ['April 30, 2020',      441,72,32],
          ['May 1 , 2020',        448,84,32],
          ['May 2, 2020',         481,88,33],
          ['May 4, 2020',         502,98,35],
          ['May 5, 2020',         555,84,37],
          ['May 6, 2020',         555,111,37],
          ['May 10, 2020',        578,148,40],
          ['May 13, 2020',        601,181,40],
          ['May 14, 2020',        624,240,40],
          ['May 15, 2020',        635,259,40],
          ['May 18, 2020',        649,335,42],
          ['May 19, 2020',        650,335,42],
          ['May 20, 2020',        652,375,42],
          ['May 21, 2020',        666,375,42],
          ['May 22, 2020',        670,380,45],
          ['May 23, 2020',        670,380,45],
          ['May 24, 2020',673,380,45]
                
        ]);

        var options = {
          title: 'Confirmed Cases per day(March 20, 2020 to May 23, 2020)',
          curveType: 'function',
            fontSize:12,
       
          legend: {
            position:'right',
          },
          
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
      }
    </script>
  </head>
 
  <body>
     <div id="curve_chart" style="margin-right:30em;font-weight: bold;width: 1190px; height: 540px"></div><br>
      
      
     <div id="vis_div" style="width: 1400px; height: 650px;margin-left:-200;"></div>
     <div id="R" style="width: 1400px; height: 650px;margin-left:-200;"></div>
     <div id="Deaths" style="width: 1400px; height: 650px;margin-left:-200;"></div>
     <br><br>
     <h2>Latest news</h2>
     <h4>Updates</h4>
     <div class="det">
     <details>
        <summary style="padding:1px solid rgb(24, 24, 24);">May 24, 2020</summary>
     <p><li><b>Parañaque:</b> +3 new cases,no new recovered,and no new deaths<br>
       <li><b>Baclaran:</b> no new Active Cases ,no new recoveries, no new deaths<br>
       <li><b>Don Galo:</b> no new Active Cases,no new recoveries,no new deaths<br>
       <li><b>La Huerta:</b> no new Active Cases,no new recoveries,no  new deaths<br>
       <li><b>San Dionisio:</b> no new Active Cases,no new recoveries,no new deaths <br>
       <li><b>San Isidro:</b> 2 new Active Cases,no new recoveries,no new deaths<br>
       <li><b>Sto.niño:</b> no new Active Cases, no new recoveries,no new deaths<br>
       <li><b>Tambo:</b> no new Active Cases, no new recoveries, no new deaths<br>
       <li><b>Vitalez:</b> no new Active Cases,no new recoveries,no new deaths<br>
       <li><b>BF Homes:</b> no new Active Cases,no new recoveries,no new deaths<br>
       <li><b>Don Bosco:</b> no new Active Cases,no new recoveries,no new deaths<br>
       <li><b>Marcelo Green:</b> no new Active Cases,no new recoveries,no new deaths<br>
       <li><b>Merville:</b> 1 new Active Cases,no new recoveries,no new deaths<br>
       <li><b>Moonwalk:</b> no new Active Cases,no new recovered,no new recovered<br>
       <li><b>San Antonio:</b> no new Active Cases,no new recoveries,no new deaths<br>
       <li><b>San Martin de Porres:</b> no new Active Cases,no new recoveries,no new deaths<br>
       <li><b>Sun Valley:</b> no new Active Cases,no new recoveries,no new deaths</p> 
       <li><b>Unknown Baranggay:</b> no new Active Cases</p><br>
         <b>Confirmed Cases: 676</b><br>
         <b>Recoveries: 380</b><br>
         <b>Deaths: 45</b><br>
         <b>Active Cases: 248</b>
 </details><br> 
      <details>
        <summary style="padding:1px solid rgb(24, 24, 24);">May 23, 2020</summary>
     <p><li><b>Parañaque:</b> +3 new cases,no new recovered,and no new deaths<br>
       <li><b>Baclaran:</b> no new Active Cases ,no new recoveries, no new deaths<br>
       <li><b>Don Galo:</b> no new Active Cases,no new recoveries,no new deaths<br>
       <li><b>La Huerta:</b> +1 new Active Cases,no new recoveries,no  new deaths<br>
       <li><b>San Dionisio:</b> +1 new Active Cases,no new recoveries,no new deaths <br>
       <li><b>San Isidro:</b> no new Active Cases,no new recoveries,no new deaths<br>
       <li><b>Sto.niño:</b> no new Active Cases, no new recoveries,no new deaths<br>
       <li><b>Tambo:</b> no new Active Cases, no new recoveries, no new deaths<br>
       <li><b>Vitalez:</b> no new Active Cases,no new recoveries,no new deaths<br>
       <li><b>BF Homes:</b> no new Active Cases,no new recoveries,no new deaths<br>
       <li><b>Don Bosco:</b> no new Active Cases,no new recoveries,no new deaths<br>
       <li><b>Marcelo Green:</b> no new Active Cases,no new recoveries,no new deaths<br>
       <li><b>Merville:</b> no new Active Cases,no new recoveries,no new deaths<br>
       <li><b>Moonwalk:</b> no new Active Cases,no new recovered,no new recovered<br>
       <li><b>San Antonio:</b> no new Active Cases,no new recoveries,no new deaths<br>
       <li><b>San Martin de Porres:</b> no new Active Cases,no new recoveries,no new deaths<br>
       <li><b>Sun Valley:</b> +1 new Active Cases,no new recoveries,no new deaths</p> 
       <li><b>Unknown Baranggay:</b> no new Active Cases</p><br>
         <b>Confirmed Cases: 676</b><br>
         <b>Recoveries: 380</b><br>
         <b>Deaths: 45</b><br>
         <b>Active Cases: 251</b>
 </details><br> 
      <details>
        <summary style="padding:1px solid rgb(24, 24, 24);">May 22, 2020</summary>
     <p><li><b>Parañaque:</b> 4 new cases,5 new recovered,and 3 new deaths<br>
       <li><b>Baclaran:</b> -4 Active Cases ,34 total recoveries, 3 total deaths<br>
       <li><b>Don Galo:</b> no new Active Cases,7 total recoveries,1 total deaths<br>
       <li><b>La Huerta:</b> no new Active Cases,19 total recoveries,1 total deaths<br>
       <li><b>San Dionisio:</b> +1 new Active Cases,39 total recoveries,2 total deaths <br>
       <li><b>San Isidro:</b> no new Active Cases,32 total recoveries,3 total deaths<br>
       <li><b>Sto.niño:</b> no new Active Cases, 6 total recoveries,1 total deaths<br>
       <li><b>Tambo:</b> +3 new Active Cases<br>
       <li><b>Vitalez:</b> no new Active Cases,2 total recoveries,no deaths<br>
       <li><b>BF Homes:</b> +1 Active Cases,47 total recoveries,6 total deaths<br>
       <li><b>Don Bosco:</b> no new Active Cases,42 total recoveries,4 total deaths<br>
       <li><b>Marcelo Green:</b> -2 Active Cases,23 total recoveries,4 total deaths<br>
       <li><b>Merville:</b> no new Active Cases,15 total recoveries,2 total deaths<br>
       <li><b>Moonwalk:</b> no new Active Cases,30 total recovered,6 total recovered<br>
       <li><b>San Antonio:</b> no new Active Cases,35 total recoveries,6 total deaths<br>
       <li><b>San Martin de Porres:</b> no new Active Cases,11 total recoveries,1 total deaths<br>
       <li><b>Sun Valley:</b> no new Active Cases,16 total recoveries,4 total deaths</p> 
       <li><b>Unknown Baranggay:</b> no new Active Cases</p><br>
         <b>Confirmed Cases: 670</b><br>
         <b>Recoveries: 380</b><br>
         <b>Deaths: 45</b><br>
         <b>Active Cases: 245</b>
 </details><br> 
     <details>
       <summary style="padding:1px solid rgb(24, 24, 24);">May 21, 2020</summary>
    <p><li><b>Parañaque:</b> 14 new cases,20 new recovered,and no new deaths<br>
      <li><b>Baclaran:</b> +4 Active Cases<br>
      <li><b>Don Galo:</b> +1 Active Cases<br>
      <li><b>La Huerta:</b> -2 Active Cases<br>
      <li><b>San Dionisio:</b> -7 new Active Cases<br>
      <li><b>San Isidro:</b> no new Active Cases<br>
      <li><b>Sto.niño:</b> no Active Cases<br>
      <li><b>Tambo:</b> +3 new Active Cases<br>
      <li><b>Vitalez:</b> +1 new Active Cases<br>
      <li><b>BF Homes:</b> +3 Active Cases<br>
      <li><b>Don Bosco:</b> -3 Active Cases<br>
      <li><b>Marcelo Green:</b> +4 Active Cases<br>
      <li><b>Merville:</b> no new Active Cases<br>
      <li><b>Moonwalk:</b> +1 Active Cases<br>
      <li><b>San Antonio:</b> +1 new Active Cases<br>
      <li><b>San Martin de Porres:</b> +1 new Active Cases<br>
      <li><b>Sun Valley:</b> -1 Active Cases</p> 
      <li><b>Unknown Baranggay:</b> 26 Active Cases</p><br>
        <b>Confirmed Cases: 666</b><br>
        <b>Recovered: 375</b><br>
        <b>Deaths: 42</b><br>
        <b>Active Cases: 249</b>
</details><br> 
     <details>
       <summary style="padding:1px solid rgb(24, 24, 24);">May 20, 2020</summary>
    <p><li><b>Parañaque:</b> 3 new cases,20 new recovered,and no new deaths<br>
      <li><b>Baclaran:</b> -4 Active Cases<br>
      <li><b>Don Galo:</b> 1 Active Cases<br>
      <li><b>La Huerta:</b> -4 Active Cases<br>
      <li><b>San Dionisio:</b> 5 new Active Cases<br>
      <li><b>San Isidro:</b> 2 new Active Cases<br>
      <li><b>Sto.niño:</b> -2 Active Cases<br>
      <li><b>Tambo:</b> no new Active Cases<br>
      <li><b>Vitalez:</b> no new Active Cases<br>
      <li><b>BF Homes:</b> -2 Active Cases<br>
      <li><b>Don Bosco:</b> -1 Active Cases<br>
      <li><b>Marcelo Green:</b> -1 Active Cases<br>
      <li><b>Merville:</b> no new Active Cases<br>
      <li><b>Moonwalk:</b> -1 Active Cases<br>
      <li><b>San Antonio:</b> 2 new Active Cases<br>
      <li><b>San Martin de Porres:</b> no new Active Cases<br>
      <li><b>Sun Valley:</b> -1 Active Cases</p>
        <b>Confirmed Cases: 652</b><br>
        <b>Recovered: 355</b><br>
        <b>Deaths: 42</b><br>
        <b>Active Cases: 217</b>
</details><br> 
     <details>
       <summary style="padding:1px solid rgb(24, 24, 24);">May 19, 2020</summary>
    <p><li><b>Parañaque:</b> 1 new cases,39 new recovered,and no new deaths<br>
      <li><b>Baclaran:</b> 21 Active Cases<br>
      <li><b>Don Galo:</b> 1 Active Cases<br>
      <li><b>La Huerta:</b> 12 Active Cases<br>
      <li><b>San Dionisio:</b> 51 Active Cases<br>
      <li><b>San Isidro:</b> 11 Active Cases<br>
      <li><b>Sto.niño:</b> 5 Active Cases<br>
      <li><b>Tambo:</b> 8 Active Cases<br>
      <li><b>Vitalez:</b> 0 Active Cases<br>
      <li><b>BF Homes:</b> 15 Active Cases<br>
      <li><b>Don Bosco:</b> 18 Active Cases<br>
      <li><b>Marcelo Green:</b> 4 Active Cases<br>
      <li><b>Merville:</b> 1 Active Cases<br>
      <li><b>Moonwalk:</b> 21 Active Cases<br>
      <li><b>San Antonio:</b> 39 Active Cases<br>
      <li><b>San Martin de Porres:</b> 1 Active Cases<br>
      <li><b>Sun Valley:</b> 15 Active Cases</p>
        <b>Confirmed Cases: 649</b><br>
        <b>Recovered: 335</b><br>
        <b>Deaths: 42</b><br>
        <b>Active Cases: 222</b>
</details><br> 
<details> 
<summary style="padding:1px solid rgb(24, 24, 24);">May 18, 2020</summary>
    <p><li><b>Parañaque:</b> 13 new cases,34 new recovered,and 2 new deaths<br>
      <li><b>Baclaran:</b> 21 Active Cases<br>
      <li><b>Don Galo:</b> 1 Active Cases<br>
      <li><b>La Huerta:</b> 12 Active Cases<br>
      <li><b>San Dionisio:</b> 51 Active Cases<br>
      <li><b>San Isidro:</b> 11 Active Cases<br>
      <li><b>Sto.niño:</b> 5 Active Cases<br>
      <li><b>Tambo:</b> 8 Active Cases<br>
      <li><b>Vitalez:</b> 0 Active Cases<br>
      <li><b>BF Homes:</b> 15 Active Cases<br>
      <li><b>Don Bosco:</b> 18 Active Cases<br>
      <li><b>Marcelo Green:</b> 4 Active Cases<br>
      <li><b>Merville:</b> 1 Active Cases<br>
      <li><b>Moonwalk:</b> 21 Active Cases<br>
      <li><b>San Antonio:</b> 39 Active Cases<br>
      <li><b>San Martin de Porres:</b> 1 Active Cases<br>
      <li><b>Sun Valley:</b> 15 Active Cases</p>
        <b>Confirmed Cases: 649</b><br>
        <b>Recovered: 335</b><br>
        <b>Deaths: 42</b><br>
        <b>Active Cases: 222</b>
</details><br> 
     <details>
    <summary style="padding:1px solid rgb(24, 24, 24);">May 15, 2020</summary>
    <p><li><b>Parañaque:</b> 11 new cases,19 new recovered,and no new deaths<br>
      <li><b>Baclaran:</b>no new cases,no new recovered,and no new deaths<br>
      <li><b>Don Galo:</b>no new cases,2 new recovered,and no new deaths<br>
      <li><b>La Huerta:</b>no new cases,no new recovered, no new deaths<br>
      <li><b>San Dionisio:</b> 2 new cases, 4 new recovered,and no new deaths<br>
      <li><b>San Isidro:</b> 1 new cases, 3 new recovered, and no new deaths<br>
      <li><b>Sto.niño:</b>1 new cases,no new recovered,and no new deaths<br>
      <li><b>Tambo:</b> 2 new cases, 1 new recovered,and no new deaths<br>
      <li><b>Vitalez:</b>no new cases,no new recovered,and no new deaths<br>
      <li><b>BF Homes:</b>no new cases, 10 new recovered,and no new deaths<br>
      <li><b>Don Bosco:</b> 1 new cases, no new recovered,and no new deaths<br>
      <li><b>Marcelo Green:</b>no new cases, no new recovered,and no new deaths<br>
      <li><b>Merville:</b> no new cases,no new recovered,and no new deaths<br>
      <li><b>Moonwalk:</b>2 new cases,no new recovered,and no new deaths<br>
      <li><b>San Antonio:</b>no new cases,no new recovered,and no new deaths<br>
      <li><b>San Martin de Porres:</b>no new cases,no new recovered,and no new deaths<br>
      <li><b>Sun Valley:</b>1 new cases,no new recovered,and no new Deaths</p>
        <b>Confirmed Cases: 635</b><br>
        <b>Recovered: 259</b><br>
        <b>Deaths: 40</b>
</details><br> 
     <details>
    <summary style="padding:1px solid rgb(24, 24, 24);">May 14, 2020</summary>
    <p><li><b>Parañaque:</b> 23 new cases,59 new recovered,and no new deaths<br>
      <li><b>Baclaran:</b>1 new cases,no new recovered,and no new deaths<br>
      <li><b>Don Galo:</b>no new cases,no new recovered,and no new deaths<br>
      <li><b>La Huerta:</b>no new cases,no new recovered, no new deaths<br>
      <li><b>San Dionisio:</b> 8 new cases, 5 new recovered,and no new deaths<br>
      <li><b>San Isidro:</b> 6 new cases, 3 recovered, and no new deaths<br>
      <li><b>Sto.niño:</b>no new cases,1 new recovered,and no new deaths<br>
      <li><b>Tambo:</b> 1 new cases, 5 new recovered,and no new deaths<br>
      <li><b>Vitalez:</b>no new cases,no new recovered,and no new deaths<br>
      <li><b>BF Homes:</b>no new cases, 4 new recovered,and no new deaths<br>
      <li><b>Don Bosco:</b> no new cases, 14 new recovered,and no new deaths<br>
      <li><b>Marcelo Green:</b>no new cases, 2 new recovered,and no new deaths<br>
      <li><b>Merville:</b> no new cases,5 new recovered,and no new deaths<br>
      <li><b>Moonwalk:</b>5 new cases,15 new recovered,and no new deaths<br>
      <li><b>San Antonio:</b>2 new cases,29 new recovered,and no new deaths<br>
      <li><b>San Martin de Porres:</b>no new cases,no new recovered,and no new deaths<br>
      <li><b>Sun Valley:</b>1 new cases,1 new recovered,and no new Deaths</p>
        <b>Confirmed Cases: 624</b><br>
        <b>Recovered: 240</b><br>
        <b>Deaths: 40</b>
</details><br> 
     <details>
    <summary style="padding:1px solid rgb(24, 24, 24);">May 13, 2020</summary>
    <p><li><b>Parañaque:</b> 23 new cases,33 new recovered,and no new deaths<br>
      <li><b>Baclaran:</b>5 new cases,2 new recovered,and no new deaths<br>
      <li><b>Don Galo:</b>1 new cases,2 new recovered,and no new deaths<br>
      <li><b>La Huerta:</b>2 new cases,no new recovered, no new deaths<br>
      <li><b>San Dionisio:</b> 8 new cases, 5 new recovered,and no new deaths<br>
      <li><b>San Isidro:</b> 3 new cases, 1 recovered, and no new deaths<br>
      <li><b>Sto.niño:</b>no new cases,1 new recovered,and no new deaths<br>
      <li><b>Tambo:</b> 1 new cases, no new recovered,and no new deaths<br>
      <li><b>Vitalez:</b>no new cases,no new recovered,and no new deaths<br>
      <li><b>BF Homes:</b>no new cases, 2 new recovered,and no new deaths<br>
      <li><b>Don Bosco:</b> no new cases, no new recovered,and no new deaths<br>
      <li><b>Marcelo Green:</b>no new cases, no new recovered,and no new deaths<br>
      <li><b>Merville:</b> no new cases,4 new recovered,and no new deaths<br>
      <li><b>Moonwalk:</b>no new cases,no new recovered,and no new deaths<br>
      <li><b>San Antonio:</b>no new cases,9 new recovered,and no new deaths<br>
      <li><b>San Martin de Porres:</b>no new cases,no new recovered,and no new deaths<br>
      <li><b>Sun Valley:</b>no new cases,2 new recovered,and no new Deaths</p>
        <b>Confirmed Cases: 601</b><br>
        <b>Recovered: 181</b><br>
        <b>Deaths: 40</b>
</details><br> 
     <details>
    <summary style="padding:1px solid rgb(24, 24, 24);">May 10, 2020</summary>
    <p><li><b>Parañaque:</b> 23 new cases,37 recovered,and 3 new deaths<br>
      <li><b>Baclaran:</b>no new cases,no new recovered,and no new deaths<br>
      <li><b>Don Galo:</b>no new cases,no new recovered,and no new deaths<br>
      <li><b>La Huerta:</b>1 new cases,1 new recovered, 2 new deaths<br>
      <li><b>San Dionisio:</b> 3 new cases, 1 new recovered,and no new deaths<br>
      <li><b>San Isidro:</b> 2 new cases, 2 recovered, 1 new deaths<br>
      <li><b>Sto.niño:</b>no new cases,no new recovered,and no new deaths<br>
      <li><b>Tambo:</b> 2 new cases, 3 new recovered,and no new deaths<br>
      <li><b>Vitalez:</b>no new cases,no new recovered,and no new deaths<br>
      <li><b>BF Homes:</b>no new cases, 5 new recovered,and no new deaths<br>
      <li><b>Don Bosco:</b> 1 new cases, 9 new recovered,and no new deaths<br>
      <li><b>Marcelo Green:</b>no new cases, 4 new recovered,and  1 new deaths<br>
      <li><b>Merville:</b> 2 new cases,no new recovered,and no new deaths<br>
      <li><b>Moonwalk:</b>no new cases,no new recovered,and 1 new deaths<br>
      <li><b>San Antonio:</b>8 new cases,no new recovered,and no new deaths<br>
      <li><b>San Martin de Porres:</b>no new cases,6 new recovered,and no new deaths<br>
      <li><b>Sun Valley:</b>1 new cases,4 new recovered,and no new Deaths</p>
        <b>Confirmed Cases: 578</b><br>
        <b>Recovered: 148</b><br>
        <b>Deaths: 40</b>
</details><br> 
  <details>
    <summary style="padding:1px solid rgb(24, 24, 24);">May 6, 2020</summary>
    <p><li><b>Parañaque:</b>53 new cases,13 recovered, and 2 new deaths<br>
      <li><b>Baclaran:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Don Galo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>La Huerta:</b>5 new cases,no new recovered, and no new deaths<br>
      <li><b>San Dionisio:</b>16 new cases,no new recovered, and no new deaths<br>
      <li><b>San Isidro:</b>7 new cases,6 recovered, and no new deaths<br>
      <li><b>Sto.Niño:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Tambo:</b>2 new cases,1 recovered, and no new deaths<br>
      <li><b>Vitalez:</b>1 new cases,no new recovered, and no new deaths<br>
      <li><b>BF Homes:</b>3 new cases,2 new recovered, and no new deaths<br>
      <li><b>Don Bosco:</b>2 new cases,no new recovered, and no new deaths<br>
      <li><b>Marcelo Green:</b>2 new cases,1 new recovered, and no new deaths<br>
      <li><b>Merville:</b>2 new cases, no new recovered, and no new deaths<br>
      <li><b>Moonwalk:</b>4 new cases, 3 new recovered, and no new deaths<br>
      <li><b>San Antonio:</b>9 new cases, no new recovered, and 2 new deaths<br>
      <li><b>San Martin de Porres:</b> no new cases,no new recovered, and no new deaths<br>
      <li><b>Sun Valley:</b> no new cases, no new recovered, and 1 new Deaths</p>
        <b>Confirmed Cases: 555</b><br>
        <b>Recovered: 111</b><br>
        <b>Deaths: 37</b>

    
    
</details><br> 
<details>
    <summary style="padding:1px solid rgb(24, 24, 24);">May 4, 2020</summary>
    <p><li><b>Parañaque:</b>21 new cases,10 recovered, and 2 new deaths<br>
      <li><b>Baclaran:</b>2 new cases,no new recovered, and no new deaths<br>
      <li><b>Don Galo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>La Huerta:</b>2 new cases,2 new recovered, and no new deaths<br>
      <li><b>San Dionisio:</b>no new cases,3 new recovered, and no new deaths<br>
      <li><b>San Isidro:</b>1 new cases,1 new recovered, and no new deaths<br>
      <li><b>Sto.Niño:</b>1 new cases,no new recovered, and 1 new deaths<br>
      <li><b>Tambo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Vitalez:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>BF Homes:</b>6 new cases,2 new recovered, and no new deaths<br>
      <li><b>Don Bosco:</b>no new cases,1 new recovered, and no new deaths<br>
      <li><b>Marcelo Green:</b>2 new cases,1 new recovered, and 1 new deaths<br>
      <li><b>Merville:</b>1 new cases, no new recovered, and no new deaths<br>
      <li><b>Moonwalk:</b>1 new cases, no new recovered, and no new deaths<br>
      <li><b>San Antonio:</b>4 new cases, no new recovered, and no new deaths<br>
      <li><b>San Martin de Porres:</b> 3 new cases,no new recovered, and no new deaths<br>
      <li><b>Sun Valley:</b> no new cases, no new recovered, and no new Deaths</p>
        <b>Confirmed Cases: 502</b><br>
        <b>Recovered: 98</b><br>
        <b>Deaths: 35</b>

    
    
</details><br> 
 
<details>
    <summary style="padding:1px solid rgb(24, 24, 24);">May 2, 2020</summary>
    <p><li><b>Parañaque:</b>33 new cases,4 recovered, and 1 new deaths<br>
      <li><b>Baclaran:</b>13 new cases,no new recovered, and 1 new deaths<br>
      <li><b>Don Galo:</b>1 new cases,no new recovered, and no new deaths<br>
      <li><b>La Huerta:</b>2 new cases,no new recovered, and no new deaths<br>
      <li><b>San Dionisio:</b>6 new cases,2 new recovered, and no new deaths<br>
      <li><b>San Isidro:</b>3 new cases,no new recovered, and no new deaths<br>
      <li><b>Sto.Niño:</b>1 new cases,no new recovered, and no new deaths<br>
      <li><b>Tambo:</b>1 new cases,no new recovered, and no new deaths<br>
      <li><b>Vitalez:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>BF Homes:</b>2 new cases,1 new recovered, and 1 new deaths<br>
      <li><b>Don Bosco:</b>3 new cases,no new recovered, and no new deaths<br>
      <li><b>Marcelo Green:</b>1 new cases,no new recovered, and no new deaths<br>
      <li><b>Merville:</b>no new cases, no new recovered, and no new deaths<br>
      <li><b>Moonwalk:</b>no new cases, no new recovered, and no new deaths<br>
      <li><b>San Antonio:</b>1 new cases, 2 new recovered, and no new deaths<br>
      <li><b>San Martin de Porres:</b> no new cases,no new recovered, and no new deaths<br>
      <li><b>Sun Valley:</b> no new cases, no new recovered, and no new Deaths</p>
        <b>Confirmed Cases: 481</b><br>
        <b>Recovered: 88</b><br>
        <b>Deaths: 33</b>

    
    
</details><br>
<details>
    <summary style="padding:1px solid rgb(24, 24, 24);">May 1, 2020</summary>
    <p><li><b>Parañaque:</b>7 new cases,12 recovered, and no new deaths<br>
      <li><b>Baclaran:</b>2 new cases,no new recovered, and no new deaths<br>
      <li><b>Don Galo:</b>no new cases,1 new recovered, and no new deaths<br>
      <li><b>La Huerta:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>San Dionisio:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>San Isidro:</b>no new cases,1 new recovered, and no new deaths<br>
      <li><b>Sto.Niño:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Tambo:</b>2 new cases,5 new recovered, and no new deaths<br>
      <li><b>Vitalez:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>BF Homes:</b>no new cases,1 new recovered, and no new deaths<br>
      <li><b>Don Bosco:</b>1 new cases,2 new recovered, and no new deaths<br>
      <li><b>Marcelo Green:</b>1 new cases,1 new recovered, and no new deaths<br>
      <li><b>Merville:</b>no new cases, no new recovered, and no new deaths<br>
      <li><b>Moonwalk:</b>1 new cases, 1 new recovered, and no new deaths<br>
      <li><b>San Antonio:</b>1 new cases, no new recovered, and no new deaths<br>
      <li><b>San Martin de Porres:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Sun Valley:</b> no new cases, no new recovered, and no new Deaths</p>
        <b>Confirmed Cases: 448</b><br>
        <b>Recovered: 84</b><br>
        <b>Deaths: 32</b>

    
    
</details><br>
<details>
    <summary style="padding:1px solid rgb(24, 24, 24);">April 30, 2020</summary>
    <p><li><b>Parañaque:</b>5 new cases,5 recovered, and no new deaths<br>
      <li><b>Baclaran:</b>no new cases,2 new recovered, and no new deaths<br>
      <li><b>Don Galo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>La Huerta:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>San Dionisio:</b>1 new cases,no new recovered, and no new deaths<br>
      <li><b>San Isidro:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Sto.Niño:</b>2 new cases,no new recovered, and no new deaths<br>
      <li><b>Tambo:</b>1 new cases,no new recovered, and no new deaths<br>
      <li><b>Vitalez:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>BF Homes:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Don Bosco:</b>no new cases,3 new recovered, and no new deaths<br>
      <li><b>Marcelo Green:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Merville:</b>1 new cases, no new recovered, and no new deaths<br>
      <li><b>Moonwalk:</b>no new cases, no new recovered, and no new deaths<br>
      <li><b>San Antonio:</b>1 new cases, no new recovered, and no new deaths<br>
      <li><b>San Martin de Porres:</b> no new cases,no new recovered, and no new deaths<br>
      <li><b>Sun Valley:</b> no new cases, no new recovered, and no new Deaths</p>
        <b>Confirmed Cases: 441</b><br>
        <b>Recovered: 72</b><br>
        <b>Deaths: 32</b>

    
    
</details><br>

<details>
    <summary style="padding:1px solid rgb(24, 24, 24);">April 29, 2020</summary>
    <p><li><b>Parañaque:</b>13 new cases,8 recovered, and 1 new deaths<br>
      <li><b>Baclaran:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Don Galo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>La Huerta:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>San Dionisio:</b>1 new cases,1 new recovered, and no new deaths<br>
      <li><b>San Isidro:</b>1 new cases,1 new recovered, and no new deaths<br>
      <li><b>Sto.Niño:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Tambo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Vitalez:</b>no new cases,1 new recovered, and no new deaths<br>
      <li><b>BF Homes:</b>4 new cases,1 new recovered, and no new deaths<br>
      <li><b>Don Bosco:</b>6 new cases,1 new recovered, and no new deaths<br>
      <li><b>Marcelo Green:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Merville:</b>1 new cases, 1 new recovered, and 1 new deaths<br>
      <li><b>Moonwalk:</b>1 new cases, no new recovered, and no new deaths<br>
      <li><b>San Antonio:</b>4 new cases, 1 new recovered, and no new deaths<br>
      <li><b>San Martin de Porres:</b> no new cases,no new recovered, and no new deaths<br>
      <li><b>Sun Valley:</b> no new cases, 1 new recovered, and no new Deaths</p>
        <b>Confirmed Cases: 436</b><br>
        <b>Recovered: 67</b><br>
        <b>Deaths: 32</b>

    
    
</details><br>

<details>
    <summary style="padding:1px solid rgb(24, 24, 24);">April 27, 2020</summary>
    <p><li><b>Parañaque:</b>13 new cases,no new recovered, and no new deaths<br>
      <li><b>Baclaran:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Don Galo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>La Huerta:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>San Dionisio:</b>1 new cases,1 new recovered, and no new deaths<br>
      <li><b>San Isidro:</b>1 new cases,1 new recovered, and no new deaths<br>
      <li><b>Sto.Niño:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Tambo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Vitalez:</b>no new cases,1 new recovered, and no new deaths<br>
      <li><b>BF Homes:</b>4 new cases,1 new recovered, and no new deaths<br>
      <li><b>Don Bosco:</b>6 new cases,1 new recovered, and no new deaths<br>
      <li><b>Marcelo Green:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Merville:</b>no new cases, no new recovered, and no new deaths<br>
      <li><b>Moonwalk:</b>1 new cases, no new recovered, and no new deaths<br>
      <li><b>San Antonio:</b>4 new cases, 1 new recovered, and no new deaths<br>
      <li><b>San Martin de Porres:</b> no new cases,no new recovered, and no new deaths<br>
      <li><b>Sun Valley:</b> no new cases, no new recovered, and no new Deaths</p>
        <b>Confirmed Cases: 423</b><br>
        <b>Recovered: 59</b><br>
        <b>Deaths: 31</b>

    
    
</details><br>

<details>
    <summary style="padding:1px solid rgb(24, 24, 24);">April 26, 2020</summary>
    <p><li><b>Parañaque:</b>13 new cases,no new recovered, and no new deaths<br>
      <li><b>Baclaran:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Don Galo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>La Huerta:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>San Dionisio:</b>1 new cases,no new recovered, and 1 new deaths<br>
      <li><b>San Isidro:</b>1 new cases,no new recovered, and no new deaths<br>
      <li><b>Sto.Niño:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Tambo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Vitalez:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>BF Homes:</b>3 new cases,no new recovered, and no new deaths<br>
      <li><b>Don Bosco:</b>3 new cases,no new recovered, and no new deaths<br>
      <li><b>Marcelo Green:</b>1 new cases,no new recovered, and no new deaths<br>
      <li><b>Merville:</b>no new cases, no new recovered, and no new deaths<br>
      <li><b>Moonwalk:</b>no new cases, no new recovered, and no new deaths<br>
      <li><b>San Antonio:</b>3 new cases, no new recovered, and no new deaths<br>
      <li><b>San Martin de Porres:</b> no new cases,no new recovered, and no new deaths<br>
      <li><b>Sun Valley:</b> 1 new cases, no new recovered, and no new Deaths</p>
        <b>Confirmed Cases: 414</b><br>
        <b>Recovered: 59</b><br>
        <b>Deaths: 31</b>

    
    
</details><br>

<details>
    <summary style="padding:1px solid rgb(24, 24, 24);">April 25, 2020</summary>
    <p><li><b>Parañaque:</b>2 new cases,3 recovered, and 2 new deaths<br>
      <li><b>Baclaran:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Don Galo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>La Huerta:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>San Dionisio:</b>1 new cases,no new recovered, and 1 new deaths<br>
      <li><b>San Isidro:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Sto.Niño:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Tambo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Vitalez:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>BF Homes:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Don Bosco:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Marcelo Green:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Merville:</b>1 new cases, no new recovered, and no new deaths<br>
      <li><b>Moonwalk:</b>no new cases, no new recovered, and 1 new deaths<br>
      <li><b>San Antonio:</b>no new cases, 3 new recovered, and no new deaths<br>
      <li><b>San Martin de Porres:</b> no new cases,no new recovered, and no new deaths<br>
      <li><b>Sun Valley:</b> 1 new cases, no new recovered, and no new Deaths</p>
        <b>Confirmed Cases: 401</b><br>
        <b>Recovered: 59</b><br>
        <b>Deaths: 31</b>

    
    
</details><br>

<details>
    <summary style="padding:1px solid rgb(24, 24, 24);">April 24, 2020</summary>
    <p><li><b>Parañaque:</b>1 new cases,4 recovered, and no new deaths<br>
      <li><b>Baclaran:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Don Galo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>La Huerta:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>San Dionisio:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>San Isidro:</b>no new cases,1 new recovered, and no new deaths<br>
      <li><b>Sto.Niño:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Tambo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Vitalez:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>BF Homes:</b>no new cases,1 new recovered, and no new deaths<br>
      <li><b>Don Bosco:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Marcelo Green:</b>no new cases,1 new recovered, and no new deaths<br>
      <li><b>Merville:</b>no new cases, no new recovered, and no new deaths<br>
      <li><b>Moonwalk:</b>1 new cases, no new recovered, and no new deaths<br>
      <li><b>San Antonio:</b>no new cases, no new recovered, and no new deaths<br>
      <li><b>San Martin de Porres:</b> no new cases,no new recovered, and no new deaths<br>
      <li><b>Sun Valley:</b> no new cases, 1 new recovered, and no new Deaths</p>
        <b>Confirmed Cases: 399</b><br>
        <b>Recovered: 56</b><br>
        <b>Deaths: 29</b>

    
    
</details><br>

<details>
    <summary style="padding:1px solid rgb(24, 24, 24);">April 23, 2020</summary>
    <p><li><b>Parañaque:</b>2 new cases,1 recovered, and no new deaths<br>
      <li><b>Baclaran:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Don Galo:</b>no new cases,1 new recovered, and no new deaths<br>
      <li><b>La Huerta:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>San Dionisio:</b>1 new cases,no new recovered, and no new deaths<br>
      <li><b>San Isidro:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Sto.Niño:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Tambo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Vitalez:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>BF Homes:</b>2 new cases,1 new recovered, and no new deaths<br>
      <li><b>Don Bosco:</b>2 new cases,1 new recovered, and 1 new deaths<br>
      <li><b>Marcelo Green:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Merville:</b>no new cases, no new recovered, and no new deaths<br>
      <li><b>Moonwalk:</b>no new cases, no new recovered, and no new deaths<br>
      <li><b>San Antonio:</b>no new cases, no new recovered, and no new deaths<br>
      <li><b>San Martin de Porres:</b> no new cases,no new recovered, and no new deaths<br>
      <li><b>Sun Valley:</b> no new cases, no new recovered, and no new Deaths</p>
        <b>Confirmed Cases: 398</b><br>
        <b>Recovered: 51</b><br>
        <b>Deaths: 29</b>

    
    
</details><br>

<details>
    <summary style="padding:1px solid rgb(24, 24, 24);">April 22, 2020</summary>
    <p><li><b>Parañaque:</b>7 new cases,11 recovered, and 4 new deaths<br>
      <li><b>Baclaran:</b>1 new cases,no new recovered, and no new deaths<br>
      <li><b>Don Galo:</b>no new cases,1 new recovered, and no new deaths<br>
      <li><b>La Huerta:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>San Dionisio:</b>no new cases,1 new recovered, and 1 new deaths<br>
      <li><b>San Isidro:</b>1 new cases,no new recovered, and 1 new deaths<br>
      <li><b>Sto.Niño:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Tambo:</b>1 new cases,1 new recovered, and no new deaths<br>
      <li><b>Vitalez:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>BF Homes:</b>2 new cases,1 new recovered, and no new deaths<br>
      <li><b>Don Bosco:</b>2 new cases,1 new recovered, and 1 new deaths<br>
      <li><b>Marcelo Green:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Merville:</b>no new cases, 1 new recovered, and no new deaths<br>
      <li><b>Moonwalk:</b>1 new cases, no new recovered, and no new deaths<br>
      <li><b>San Antonio:</b>no new cases, 2 new recovered, and no new deaths<br>
      <li><b>San Martin de Porres:</b> no new cases,no new recovered, and 1 new deaths<br>
      <li><b>Sun Valley:</b> no new cases, 1 new recovered, and no new Deaths</p>
        <b>Confirmed Cases: 396</b><br>
        <b>Recovered: 50</b><br>
        <b>Deaths: 29</b>

    
    
</details><br>

<details>
    <summary style="padding:1px solid rgb(24, 24, 24);">April 20, 2020</summary>
    <p><li><b>Parañaque:</b>42 new cases,3 recovered, and 2 new deaths<br>
      <li><b>Baclaran:</b>1 new cases,no new recovered, and no new deaths<br>
      <li><b>Don Galo:</b>2 new cases,no new recovered, and no new deaths<br>
      <li><b>La Huerta:</b>2 new cases,no new recovered, and no new deaths<br>
      <li><b>San Dionisio:</b>9 new cases,1 new recovered, and no new deaths<br>
      <li><b>San Isidro:</b>4 new cases,1 new recovered, and no new deaths<br>
      <li><b>Sto.Niño:</b>1 new cases,no new recovered, and 1 new deaths<br>
      <li><b>Tambo:</b>3 new cases,no new recovered, and no new deaths<br>
      <li><b>Vitalez:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>BF Homes:</b>3 new cases,7 new recovered, and 1 new deaths<br>
      <li><b>Don Bosco:</b>2 new cases,no new recovered, and no new deaths<br>
      <li><b>Marcelo Green:</b>1 new cases,1 new recovered, and no new deaths<br>
      <li><b>Merville:</b>no new cases, 1 new recovered, and no new deaths<br>
      <li><b>Moonwalk:</b>13 new cases, no new recovered, and no new deaths<br>
      <li><b>San Antonio:</b>5 new cases, 2 new recovered, and 1 new deaths<br>
      <li><b>San Martin de Porres:</b> 3 new cases,no new recovered, and no new deaths<br>
      <li><b>Sun Valley:</b> 1 new cases, no new recovered, and no new Deaths</p>
        <b>Confirmed Cases: 389</b><br>
        <b>Recovered: 39</b><br>
        <b>Deaths: 41</b>

    
    
</details><br>

<details>
    <summary style="padding:1px solid rgb(24, 24, 24);">April 16, 2020</summary>
    <p><li><b>Parañaque:</b>69 new cases,25 recovered, and 5 new deaths<br>
      <li><b>Baclaran:</b>11 new cases,no new recovered, and 8 new deaths<br>
      <li><b>Don Galo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>La Huerta:</b>2 new cases,no new recovered, and no new deaths<br>
      <li><b>San Dionisio:</b>6 new cases,1 new recovered, and no new deaths<br>
      <li><b>San Isidro:</b>2 new cases,1 new recovered, and 1 new deaths<br>
      <li><b>Sto.Niño:</b>1 new cases,1 new recovered, and no new deaths<br>
      <li><b>Tambo:</b>3 new cases,no new recovered, and no new deaths<br>
      <li><b>Vitalez:</b>1 new cases,no new recovered, and no new deaths<br>
      <li><b>BF Homes:</b>4 new cases,no new recovered, and no new deaths<br>
      <li><b>Don Bosco:</b>7 new cases,3 new recovered, and 2 new deaths<br>
      <li><b>Marcelo Green:</b>5 new cases,2 new recovered, and no new deaths<br>
      <li><b>Merville:</b>1 new cases, no new recovered, and no new deaths<br>
      <li><b>Moonwalk:</b>8 new cases, no new recovered, and no new deaths<br>
      <li><b>San Antonio:</b>15 new cases, no new recovered, and 1 new deaths<br>
      <li><b>San Martin de Porres:</b> no new cases,2 new recovered, and no new deaths<br>
      <li><b>Sun Valley:</b> 2 new cases, 5 new recovered, and 1 new Deaths</p>
        <b>Confirmed Cases: 347</b><br>
        <b>Recovered: 36</b><br>
        <b>Deaths: 23</b>

    
    
</details><br>

<details>
    <summary style="padding:1px solid rgb(24, 24, 24);">April 13, 2020</summary>
    <p><li><b>Parañaque:</b>94 new cases,2 recovered, and 1 new deaths<br>
      <li><b>Baclaran:</b>2 new cases,no new recovered, and no new deaths<br>
      <li><b>Don Galo:</b>2 new cases,no new recovered, and no new deaths<br>
      <li><b>La Huerta:</b>1 new cases,no new recovered, and no new deaths<br>
      <li><b>San Dionisio:</b>10 new cases,no new recovered, and no new deaths<br>
      <li><b>San Isidro:</b>6 new cases,no new recovered, and no new deaths<br>
      <li><b>Sto.Niño:</b>1 new cases,no new recovered, and 1 new deaths<br>
      <li><b>Tambo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Vitalez:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>BF Homes:</b>6 new cases,2 new recovered, and no new deaths<br>
      <li><b>Don Bosco:</b>no new cases,1 new recovered, and no new deaths<br>
      <li><b>Marcelo Green:</b>2 new cases,1 new recovered, and 1 new deaths<br>
      <li><b>Merville:</b>1 new cases, no new recovered, and no new deaths<br>
      <li><b>Moonwalk:</b>1 new cases, no new recovered, and no new deaths<br>
      <li><b>San Antonio:</b>4 new cases, no new recovered, and no new deaths<br>
      <li><b>San Martin de Porres:</b> 3 new cases,no new recovered, and no new deaths<br>
      <li><b>Sun Valley:</b> no new cases, no new recovered, and no new Deaths</p>
        <b>Confirmed Cases: 502</b><br>
        <b>Recovered: 98</b><br>
        <b>Deaths: 35</b>

</details><br>

<details>
    <summary style="padding:1px solid rgb(24, 24, 24);">April 9, 2020</summary>
    <p><li><b>Parañaque:</b>7 new cases,no new recovered, and 1 new deaths<br>
      <li><b>Baclaran:</b>1 new cases,no new recovered, and no new deaths<br>
      <li><b>Don Galo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>La Huerta:</b>2 new cases,2 new recovered, and no new deaths<br>
      <li><b>San Dionisio:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>San Isidro:</b>1 new cases,0 new recovered, and 1 new deaths<br>
      <li><b>Sto.Niño:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Tambo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Vitalez:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>BF Homes:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Don Bosco:</b>7 new cases,1 new recovered, and no new deaths<br>
      <li><b>Marcelo Green:</b>3 new cases,no new recovered, and no new deaths<br>
      <li><b>Merville:</b>3 new cases, no new recovered, and no new deaths<br>
      <li><b>Moonwalk:</b>1 new cases, no new recovered, and 1 new deaths<br>
      <li><b>San Antonio:</b>no new cases, no new recovered, and no new deaths<br>
      <li><b>San Martin de Porres:</b>1 new cases,no new recovered, and no new deaths<br>
      <li><b>Sun Valley:</b> 1 new cases, no new recovered, and no new Deaths</p>
        <b>Confirmed Cases: 184</b><br>
        <b>Recovered: 9</b><br>
        <b>Deaths: 36</b>

    
    
</details><br>

<details>
    <summary style="padding:1px solid rgb(24, 24, 24);">April 8, 2020</summary>
    <p><li><b>Parañaque:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Baclaran:</b>no new cases,no new recovered, and 1 new deaths<br>
      <li><b>Don Galo:</b>no new cases,no new recovered, and 1 new deaths<br>
      <li><b>La Huerta:</b>no new cases,2 new recovered, and 1 new deaths<br>
      <li><b>San Dionisio:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>San Isidro:</b>no new cases,no new recovered, and 1 new deaths<br>
      <li><b>Sto.Niño:</b>no new cases,1 new recovered, and no new deaths<br>
      <li><b>Tambo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Vitalez:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>BF Homes:</b>no new cases,no new recovered, and 4 new deaths<br>
      <li><b>Don Bosco:</b>no new cases,3 new recovered, and 2 new deaths<br>
      <li><b>Marcelo Green:</b>no new cases,1 new recovered, and 1 new deaths<br>
      <li><b>Merville:</b>no new cases, no new recovered, and 1 new deaths<br>
      <li><b>Moonwalk:</b>no new cases, 3 new recovered, and 1 new deaths<br>
      <li><b>San Antonio:</b>no new cases, no new recovered, and 2 new deaths<br>
      <li><b>San Martin de Porres:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Sun Valley:</b> no new cases, 1 new recovered, and 1 new Deaths</p>
        <b>Confirmed Cases: 177</b><br>
        <b>Recovered: 9</b><br>
        <b>Deaths: 16</b>

    
    
</details><br>
<details>
    <summary style="padding:1px solid rgb(24, 24, 24);">April 7, 2020</summary>
    <p><li><b>Parañaque:</b>22 new cases,3 recovered, and 2 new deaths<br>
      <li><b>Baclaran:</b>1 new cases,no new recovered, and no new deaths<br>
      <li><b>Don Galo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>La Huerta:</b>no new cases,2 new recovered, and no new deaths<br>
      <li><b>San Dionisio:</b>2 new cases,no new recovered, and no new deaths<br>
      <li><b>San Isidro:</b>2 new cases,no new recovered, and no new deaths<br>
      <li><b>Sto.Niño:</b>1 new cases,no new recovered, and no new deaths<br>
      <li><b>Tambo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Vitalez:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>BF Homes:</b>1 new cases,no new recovered, and no new deaths<br>
      <li><b>Don Bosco:</b>3 new cases,no new recovered, and no new deaths<br>
      <li><b>Marcelo Green:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Merville:</b>1 new cases, no new recovered, and no new deaths<br>
      <li><b>Moonwalk:</b>2 new cases, no new recovered, and no new deaths<br>
      <li><b>San Antonio:</b>5 new cases, no new recovered, and no new deaths<br>
      <li><b>San Martin de Porres:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Sun Valley:</b> 1 new cases, no new recovered, and no new Deaths</p>
        <b>Confirmed Cases: 177</b><br>
        <b>Recovered: 9</b><br>
        <b>Deaths: 16</b>

    
    
</details><br>

<details>
    <summary style="padding:1px solid rgb(24, 24, 24);">April 5, 2020</summary>
    <p><li><b>Parañaque:</b>29 new cases,6 new  recovered, and 14 new deaths<br>
      <li><b>Baclaran:</b>1 new cases,no new recovered, and no new deaths<br>
      <li><b>Don Galo:</b>1 new cases,no new recovered, and no new deaths<br>
      <li><b>La Huerta:</b>2 new cases,no new recovered, and no new deaths<br>
      <li><b>San Dionisio:</b>3 new cases,no new recovered, and no new deaths<br>
      <li><b>San Isidro:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Sto.Niño:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Tambo:</b>4 new cases,no new recovered, and no new deaths<br>
      <li><b>Vitalez:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>BF Homes:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Don Bosco:</b>2 new cases,no new recovered, and no new deaths<br>
      <li><b>Marcelo Green:</b>5 new cases,no new recovered, and no new deaths<br>
      <li><b>Merville:</b>1 new cases, no new recovered, and no new deaths<br>
      <li><b>Moonwalk:</b>4 new cases, no new recovered, and no new deaths<br>
      <li><b>San Antonio:</b>4 new cases, no new recovered, and no new deaths<br>
      <li><b>San Martin de Porres:</b>2 new cases,no new recovered, and no new deaths<br>
      <li><b>Sun Valley:</b> no new cases, no new recovered, and no new Deaths</p>
        <b>Confirmed Cases: 155</b><br>
        <b>Recovered: 6</b><br>
        <b>Deaths: 14</b>

    
    
</details><br>

<details>
    <summary style="padding:1px solid rgb(24, 24, 24);">April 4, 2020</summary>
    <p><li><b>Parañaque:</b>68 new cases,5 recovered, and 12 new deaths<br>
      <li><b>Baclaran:</b>2 new cases,no new recovered, and no new deaths<br>
      <li><b>Don Galo:</b>2 new cases,no new recovered, and no new deaths<br>
      <li><b>La Huerta:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>San Dionisio:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>San Isidro:</b>4 new cases,no new recovered, and no new deaths<br>
      <li><b>Sto.Niño:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Tambo:</b>4 new cases,no new recovered, and no new deaths<br>
      <li><b>Vitalez:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>BF Homes:</b>15 new cases,no new recovered, and no new deaths<br>
      <li><b>Don Bosco:</b>9 new cases,no new recovered, and no new deaths<br>
      <li><b>Marcelo Green:</b>6 new cases,no new recovered, and no new deaths<br>
      <li><b>Merville:</b>2 new cases, no new recovered, and no new deaths<br>
      <li><b>Moonwalk:</b>4 new cases, no new recovered, and no new deaths<br>
      <li><b>San Antonio:</b>1 new cases, no new recovered, and no new deaths<br>
      <li><b>San Martin de Porres:</b> 3 new cases,no new recovered, and no new deaths<br>
      <li><b>Sun Valley:</b> 4 new cases, no new recovered, and no new Deaths</p>
        <b>Confirmed Cases: 126</b><br>
        <b>Recovered: 5</b><br>
        <b>Deaths: 12</b>

    
    
</details><br>

<details>
    <summary style="padding:1px solid rgb(24, 24, 24);">April 1, 2020</summary>
    <p><li><b>Parañaque:</b>4 new cases,no recovered, and 2 new deaths<br>
      <li><b>Baclaran:</b>2 new cases,no new recovered, and no new deaths<br>
      <li><b>Don Galo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>La Huerta:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>San Dionisio:</b>1 new cases,no new recovered, and no new deaths<br>
      <li><b>San Isidro:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Sto.Niño:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Tambo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Vitalez:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>BF Homes:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Don Bosco:</b>1 new cases,no new recovered, and no new deaths<br>
      <li><b>Marcelo Green:</b>1 new cases,no new recovered, and no new deaths<br>
      <li><b>Merville:</b>no new cases, no new recovered, and no new deaths<br>
      <li><b>Moonwalk:</b>no new cases, no new recovered, and no new deaths<br>
      <li><b>San Antonio:</b>1 new cases, no new recovered, and no new deaths<br>
      <li><b>San Martin de Porres:</b> no new cases,no new recovered, and no new deaths<br>
      <li><b>Sun Valley:</b> no new cases, no new recovered, and no new Deaths</p>
        <b>Confirmed Cases: 58</b><br>
        <b>Recovered: 0</b><br>
        <b>Deaths: 12</b>

    
    
</details><br>

<details>
    <summary style="padding:1px solid rgb(24, 24, 24);">March 31, 2020</summary>
    <p><li><b>Parañaque:</b>15 new cases,no new recovered, and 10 new deaths<br>
      <li><b>Baclaran:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Don Galo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>La Huerta:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>San Dionisio:</b>3 new cases,no new recovered, and no new deaths<br>
      <li><b>San Isidro:</b>3 new cases,no new recovered, and no new deaths<br>
      <li><b>Sto.Niño:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Tambo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Vitalez:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>BF Homes:</b>3 new cases,no new recovered, and no new deaths<br>
      <li><b>Don Bosco:</b>1 new cases,no new recovered, and no new deaths<br>
      <li><b>Marcelo Green:</b>1 new cases,no new recovered, and no new deaths<br>
      <li><b>Merville:</b>no new cases, no new recovered, and no new deaths<br>
      <li><b>Moonwalk:</b>no new cases, no new recovered, and no new deaths<br>
      <li><b>San Antonio:</b>no new cases, no new recovered, and no new deaths<br>
      <li><b>San Martin de Porres:</b> 1 new cases,no new recovered, and no new deaths<br>
      <li><b>Sun Valley:</b> no new cases, no new recovered, and no new Deaths</p>
        <b>Confirmed Cases: 54</b><br>
        <b>Recovered: 0</b><br>
        <b>Deaths: 10</b>

    
    
</details><br>

<details>
    <summary style="padding:1px solid rgb(24, 24, 24);">March 29, 2020</summary>
    <p><li><b>Parañaque:</b>1 new cases,no recovered, and 1 new deaths<br>
      <li><b>Baclaran:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Don Galo:</b>1 new cases,no new recovered, and no new deaths<br>
      <li><b>La Huerta:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>San Dionisio:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>San Isidro:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Sto.Niño:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Tambo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Vitalez:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>BF Homes:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Don Bosco:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Marcelo Green:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Merville:</b>no new cases, no new recovered, and no new deaths<br>
      <li><b>Moonwalk:</b>no new cases, no new recovered, and no new deaths<br>
      <li><b>San Antonio:</b>no new cases, no new recovered, and no new deaths<br>
      <li><b>San Martin de Porres:</b> no new cases,no new recovered, and no new deaths<br>
      <li><b>Sun Valley:</b> no new cases, no new recovered, and no new Deaths</p>
        <b>Confirmed Cases: 39</b><br>
        <b>Recovered: 0</b><br>
        <b>Deaths: 9</b>

    
    
</details><br>

<details>
    <summary style="padding:1px solid rgb(24, 24, 24);">March 28, 2020</summary>
    <p><li><b>Parañaque:</b>4 new cases,no recovered, and 2 new deaths<br>
      <li><b>Baclaran:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Don Galo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>La Huerta:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>San Dionisio:</b>no new cases,3 new recovered, and no new deaths<br>
      <li><b>San Isidro:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Sto.Niño:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Tambo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Vitalez:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>BF Homes:</b>1 new cases,no new recovered, and no new deaths<br>
      <li><b>Don Bosco:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Marcelo Green:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Merville:</b>no new cases, no new recovered, and no new deaths<br>
      <li><b>Moonwalk:</b>no new cases, no new recovered, and no new deaths<br>
      <li><b>San Antonio:</b>2 new cases, no new recovered, and no new deaths<br>
      <li><b>San Martin de Porres:</b> no new cases,no new recovered, and no new deaths<br>
      <li><b>Sun Valley:</b> 1 new cases, no new recovered, and no new Deaths</p>
        <b>Confirmed Cases: 38</b><br>
        <b>Recovered: 0</b><br>
        <b>Deaths: 8</b>

    
    
</details><br>

<details>
    <summary style="padding:1px solid rgb(24, 24, 24);">March 27, 2020</summary>
    <p><li><b>Parañaque:</b>15 new cases,0 recovered, and 3 new deaths<br>
      <li><b>Baclaran:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Don Galo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>La Huerta:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>San Dionisio:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>San Isidro:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Sto.Niño:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Tambo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Vitalez:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>BF Homes:</b>3 new cases,no new recovered, and no new deaths<br>
      <li><b>Don Bosco:</b>4 new cases,no new recovered, and no new deaths<br>
      <li><b>Marcelo Green:</b>2 new cases,no new recovered, and no new deaths<br>
      <li><b>Merville:</b>2 new cases, no new recovered, and no new deaths<br>
      <li><b>Moonwalk:</b>no new cases, no new recovered, and no new deaths<br>
      <li><b>San Antonio:</b>2 new cases, no new recovered, and no new deaths<br>
      <li><b>San Martin de Porres:</b> 2 new cases,no new recovered, and no new deaths<br>
      <li><b>Sun Valley:</b> 1 new cases, no new recovered, and no new Deaths</p>
        <b>Confirmed Cases: 34</b><br>
        <b>Recovered: 0</b><br>
        <b>Deaths: 6</b>

    
    
</details><br>

<details>
    <summary style="padding:1px solid rgb(24, 24, 24);">March 24, 2020</summary>
    <p><li><b>Parañaque:</b>21 new cases,10 recovered, and 2 new deaths<br>
      <li><b>Baclaran:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Don Galo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>La Huerta:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>San Dionisio:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>San Isidro:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Sto.Niño:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Tambo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Vitalez:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>BF Homes:</b>1 new cases,no new recovered, and no new deaths<br>
      <li><b>Don Bosco:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Marcelo Green:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Merville:</b>no new cases, no new recovered, and no new deaths<br>
      <li><b>Moonwalk:</b>1 new cases, no new recovered, and no new deaths<br>
      <li><b>San Antonio:</b>no new cases, no new recovered, and no new deaths<br>
      <li><b>San Martin de Porres:</b> no new cases,no new recovered, and no new deaths<br>
      <li><b>Sun Valley:</b> no new cases, no new recovered, and no new Deaths</p>
        <b>Confirmed Cases: 19</b><br>
        <b>Recovered: 0</b><br>
        <b>Deaths: 3</b>

    
    
</details><br>
<details>
    <summary style="padding:1px solid rgb(24, 24, 24);">March 23, 2020</summary>
    <p><li><b>Parañaque:</b>3 new cases,no new recovered, and 1 new deaths<br>
      <li><b>Baclaran:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Don Galo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>La Huerta:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>San Dionisio:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>San Isidro:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Sto.Niño:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Tambo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Vitalez:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>BF Homes:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Don Bosco:</b>2 new cases,no new recovered, and no new deaths<br>
      <li><b>Marcelo Green:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Merville:</b>no new cases, no new recovered, and no new deaths<br>
      <li><b>Moonwalk:</b>1 new cases, no new recovered, and no new deaths<br>
      <li><b>San Antonio:</b>no new cases, no new recovered, and no new deaths<br>
      <li><b>San Martin de Porres:</b> no new cases,no new recovered, and no new deaths<br>
      <li><b>Sun Valley:</b> no new cases, no new recovered, and no new Deaths</p>
        <b>Confirmed Cases: 16</b><br>
        <b>Recovered: 0</b><br>
        <b>Deaths: 1</b>

    
    
</details><br> 
<details>
    <summary style="padding:1px solid rgb(24, 24, 24);">March 22, 2020</summary>
    <p><li><b>Parañaque:</b>4 new cases,no new recovered, and 1 new deaths<br>
      <li><b>Baclaran:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Don Galo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>La Huerta:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>San Dionisio:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>San Isidro:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Sto.Niño:</b>1 new cases,no new recovered, and no new deaths<br>
      <li><b>Tambo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Vitalez:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>BF Homes:</b>2 new cases,no new recovered, and no new deaths<br>
      <li><b>Don Bosco:</b>1 new cases,no new recovered, and no new deaths<br>
      <li><b>Marcelo Green:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Merville:</b>1 new cases, no new recovered, and no new deaths<br>
      <li><b>Moonwalk:</b>no new cases, no new recovered, and no new deaths<br>
      <li><b>San Antonio:</b>1 new cases, no new recovered, and no new deaths<br>
      <li><b>San Martin de Porres:</b> no new cases,no new recovered, and no new deaths<br>
      <li><b>Sun Valley:</b> 1 new cases, no new recovered, and no new Deaths</p>
        <b>Confirmed Cases: 13</b><br>
        <b>Recovered: 0</b><br>
        <b>Deaths: 1</b>

    
    
</details><br>

<details>
    <summary style="padding:1px solid rgb(24, 24, 24);">March 21, 2020</summary>
    <p><li><b>Parañaque:</b>1 new cases,no recovered, and no new deaths<br>
      <li><b>Baclaran:</b>0 new cases,no new recovered, and no new deaths<br>
      <li><b>Don Galo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>La Huerta:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>San Dionisio:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>San Isidro:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Sto.Niño:</b>1 new cases,no new recovered, and no new deaths<br>
      <li><b>Tambo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Vitalez:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>BF Homes:</b>2 new cases,no new recovered, and no new deaths<br>
      <li><b>Don Bosco:</b>2 new cases,no new recovered, and no new deaths<br>
      <li><b>Marcelo Green:</b>1 new cases,no new recovered, and no new deaths<br>
      <li><b>Merville:</b>1 new cases, no new recovered, and no new deaths<br>
      <li><b>Moonwalk:</b>1 new cases, no new recovered, and no new deaths<br>
      <li><b>San Antonio:</b>1 new cases, no new recovered, and no new deaths<br>
      <li><b>San Martin de Porres:</b> no new cases,no new recovered, and no new deaths<br>
      <li><b>Sun Valley:</b> no new cases, no new recovered, and no new Deaths</p>
        <b>Confirmed Cases: 9</b><br>
        <b>Recovered: 0</b><br>
        <b>Deaths: 0</b>

    
    
</details><br> 
<details>
    <summary style="padding:1px solid rgb(24, 24, 24);">March 20, 2020</summary>
    <p><li><b>Parañaque:</b>8 new cases,no new recovered, and no new deaths<br>
      <li><b>Baclaran:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Don Galo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>La Huerta:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>San Dionisio:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>San Isidro:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Sto.Niño:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Tambo:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Vitalez:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>BF Homes:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Don Bosco:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Marcelo Green:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Merville:</b>no new cases, no new recovered, and no new deaths<br>
      <li><b>Moonwalk:</b>no new cases, no new recovered, and no new deaths<br>
      <li><b>San Antonio:</b>no new cases, no new recovered, and no new deaths<br>
      <li><b>San Martin de Porres:</b>no new cases,no new recovered, and no new deaths<br>
      <li><b>Sun Valley:</b> no new cases, no new recovered, and no new Deaths</p>
        <b>Confirmed Cases: 8</b><br>
        <b>Recovered: 0</b><br>
        <b>Deaths: 0</b>

    
    
</details><br><br>

</div>
<div style="float:left;padding:2em;text-align:justify; line-height:15px;">
<h1 style="background:white;color:black; display: inline;">Baranggay Updates</h2><br><br>
  <h2>District 1</h2>
   
  <table>
<tr>
<td>
  <a href="baclaran.php"><span style="color:red; font-weight:bold;font-size:1em;">!</span>Baclaran</a> 
</td>
</tr>
  <tr>
  <td>  
    <a href="dongalo.php">Don Galo</a> 
    </td>
  </tr> 
  <tr>
<td>

  <a href="lahuerta.php">La Huerta</h3></a>
</td>
  </tr>
  <tr>
    <td>
      <a href="sandionisio.php"><span style="color:red; font-weight:bold;font-size:1em;">!</span>San Dionisio</a> 
    </td>
  </tr>
  <tr>
    <td>
      <a href="sanisidro.php">San Isidro</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="stonino.php">Sto.Niño</a> 
    </td>
  </tr>
  <tr>
    <td>
      <a href="tambo.php">Tambo</a> 
    </td>

  </tr>
  <tr>
<td>
  <a href="vitalez.php">Vitalez</a><br>
</td>
  </tr>
  </table>

  <h2>District 2</h2>
  <table>
<tr>
<td>
  <a href="bf.php">BF </a> 
</td>
</tr>

<tr>
  <td>
    <a href="donbosco.php"> Don Bosco</a>
  </td>
  </tr>
<tr>
  <td>
    <a href="marcelo.php">Marcelo Green</a> 
  </td>
</tr>
 <tr>
<td>
  <a href="merville.php">Merville</a>
</td>
 </tr>
<tr>
<td>
  <a href="moonwalk.php">Moonwalk</a>
</td>
</tr>
<tr>
  <td>
    <a href="sanantonio.php"><span style="color:red; font-weight:bold;font-size:1em;">!</span>San Antonio</a>
  </td>
</tr>
<tr>
<td>
<a href="sanmartin.php">
  San Martin De Porres 
</a>
</td>
</tr>

<tr>
<td>
<a href="sunvalley.php">Sun Valley </a>
</td>
</tr>

</table>
<center>

   
</div>
</body>
  
</html>
  
  

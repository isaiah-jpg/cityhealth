<html>
    <head>
        <title>CHO</title>
        <link rel="icon" src="aw.png">
        <style>
            * {
                box-sizing: border-box;
            }
            body {
                margin: 0;
            }
            .navbar {
                overflow: hidden;
                width:100%;
                background: rgb(33, 34, 80);
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            }
            .navbar a {
                float: left;
                font-size: 18px;
                color:white;
                text-align: center;
                padding:16px 15px;
                text-decoration: none;
            }
            th {
                padding:1em;
                 
            }
            .dropdown {
                float: left;
                overflow: hidden;
            }
            .dropdown .dropbtn {
                font-size: 18px;
                border: none;
                color:white;
                padding:16px;
                
                outline: none;
                margin: 0;
            }
            .dropbtn:hover {
                background: rgb(24, 25, 58);
            }
            .dropdown-content {
                display: none;
                position: absolute;
                background: rgb(24, 25, 58);
                width: 100%;
                left:0;
                z-index: 1;
            }
            .dropdown:hover .dropdown-content {
                display: block;
                top:56px;
            }
            .dropdown {
                float: left;
                overflow: hidden;
            }
            .dropdown1 .dropbtn1 {
                font-size: 18px;
                border: none;
                color:white;
                padding:16px;
                
                outline: none;
                margin: 0;
            }
            
            .dropbtn1, .dropdown1:hover {
                background: rgb(24, 25, 58);
            }
            .dropdown-content1 {
                display: none;
                position: absolute;
                background: rgb(24, 25, 58);
                width: 100%;
                left:0;
               
            }
            .dropdown1:hover .dropdown-content1 {
                display: block;
                
                top:56px;
            }
            .dropdown1 :hover {
                background: rgb(24, 25, 58);
            }
            h1 {
                font-family:arial black;
                letter-spacing: 0.7em;
                
                font-size: 3.1em;
                color:rgb(14, 25, 54);
            }
            h2 {
                letter-spacing: 0.4em;
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            }
            h5{
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                letter-spacing: 0.2em;
                font-weight: normal;
                font-size: 1.4em;
            }
            #image {
                 max-width: 100%;
                height:500px;
                background-image: url(aa.jpg);
                background-size: cover;
                
                background-repeat: no-repeat;
            }
            button {
                width:10em;
                border:none;
                background:rgb(226, 64, 6);
                color:white;
                font-weight: bold;
                border-radius: 0.3em;
                font-size:1.2em;
                padding:0.8em;
            }
        </style>
    </head>
    <body>
        
        <div class="navbar">
            <a href="cho.php">Home</a>
            <a href="#">Social Hygine</a>
            <a href="#">City Lab</a>
            <a href="#">Nutrition</a>
            <a href="#">Dental</a>
            <a href="#">ESSD</a>
            <a href="#">HMIS/CESU</a>
            <a href="#">HEMS</a>
            <div class="dropdown1">
                <a href="#">HCS</a>
                
            <div  class="dropdown-content1">
                <a href="district1.php">Schedules</a>
                 
                
            </div>
        </div>
            <div class="dropdown">
                <a href="#" class="dropbtn">HEPO/CHIS</a>
            <div  class="dropdown-content">
                <a href="">Proposals</a>
                <a href="">IECS</a>
                <a href="">Activities</a>
                <a href="">Coordination</a>
                <a href="index.php">File</a>
            </div>
        </div>
    </div>       
    <center>  <br><br><br>
         <div id="image">

              <br><br><br><br><br><br>
             <h1 style="padding:0.4em;background: rgba(255, 255, 255, 0.767);">CITY HEALTH OFFICE</h1><br>
         <h2 style="color:white;">PARAÑAQUE CITY</h2><br> 
             <a style="border-radius: 0.3em;background: rgb(255, 102, 0); padding:0.8em;color:white;text-decoration: none;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
             ; font-weight: bold;" href="chart.php">COVID-19</a>
         </div>
        
    </center>
    </body>
     
</html>
 
<html>
<body>
    <head>
        <title>Sun Valley Schedule</title>
        <style>
                   
            table, th {
                border-collapse:collapse;
               
                
                border:2px solid rgb(245, 245, 245);
            }
           
            body {
                background:rgb(255, 255, 255);
            }
            * {
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            }
            td {
                padding:0.8em;
                text-align: justify;
                border:1px solid rgb(255, 255, 255);
            }
            button {
                border:none;
                background:rgb(223, 148, 37);
                padding:0.4em;
                width:4em;
                font-weight:bold;
                border-radius: 0.3em;
                color:white;
                font-size:1em;
            }
            option {
                background: rgb(12, 22, 65);
                border:none;
                color:white;
                font-size:1.3em;
                
            }
            th {
                padding:0.3em;
                border:2px solid rgb(19, 33, 63); 
                background:rgb(19, 33, 63);
                color:white;
                font-size:0.8em;
                border-top-left-radius: 0.1em;
            }
            input[type=text] {
                border:none;
                height:1.3em;
                font-size:1em;
                background-color: inherit;
                border:1px solid rgb(150, 216, 132);
            }
            select {
                padding:0.3em;
                font-size:1.2em;
                width:14em;
                border:1px solid rgb(129, 129, 129);
                border-radius: 0.4em;
            }
            body {
                margin:0;
            }
            table {
                width:100%;
            }
            h4 {
                font-size:1.2em;
            }
        </style>
    
    </head>
   
    <h1 style="background:rgb(21, 25, 82);padding:0.7em; color:white;">Sun Valley</h1>
    <center>
    <b><p>The New Normal Schedule</p></b>
         
    <table>
        <th>Time</th>
        <th>Monday</th>
        <th>Tuesday</th>
        <th>Wednesday</th>
        <th>Thursday</th>
        <th>Friday</th>
        <th>Saturday</th>
        <th>Sunday</th>
        <th>Family Planning</th>
        <th>NTP Medications</th>
        <th>Anti Rabies</th>
        <th>Other Services</th>
        <?php require_once'output1.php'; ?>
        <?php 
        
        $mysqli = new mysqli('localhost','root','','district_1') or
        die($mysqli->error($mysqli));
        $result = $mysqli->query("SELECT * FROM district1_tbl") or die($mysqli->error($mysqli));
        
        
        ?>
    <tr>
        <th>AM</th>
        
        <th style="font-size: 0.9em;">Medical Consultation</th>
        <th style="font-size: 0.9em;">Pre-Natal</th>
        <th style="font-size: 0.9em;">NIP</th>
        <th style="font-size: 0.9em;">Pre Natal</th>
        <th style="font-size: 0.9em;">NIP</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
     
    <form action="output1.php" method="post">
        <tr>
            <td><input type="text" style="width:94%; padding:0.1em;" name="time"></td>
            <td><input type="text" style="width:94%; padding:0.1em;" name="monday"></td>
            <td><input type="text" style="width:94%; padding:0.1em;" name="tuesday"></td>
            <td><input type="text" style="width:94%; padding:0.1em;" name="wednesday"></td>
            <td><input type="text" style="width:94%; padding:0.1em;" name="thursday"></td>
            <td><input type="text" style="width:94%; padding:0.1em;" name="friday"></td>
            <td><input type="text" style="width:94%; padding:0.1em;" name="saturday"></td>
            <td><input type="text" style="width:94%; padding:0.1em;" name="sunday"></td>
            <td><input type="text" style="width:94%; padding:0.1em;" name="fam_plan"></td>
            <td><input type="text" style="width:94%; padding:0.1em;" name="ntp"></td>
            <td><input type="text" style="width:94%; padding:0.1em;" name="anti_rabies"></td>
            <td><input type="text" style="width:94%; padding:0.1em;" name="others"></td>
            <td><button type="submit" name="sub" value="submit">Insert</button></td>
        </form>
        
    </tr>
</body>
    </html>
    
    <?php
    while($row = $result->fetch_assoc()):?>
    <tr>
    <td><?php print_r($row['time']);?></td>
    <td><?php print_r($row['monday']);?></td>
    <td><?php print_r($row['tuesday']);?></td>
    <td><?php print_r($row['wednesday']);?></td>
    <td><?php print_r($row['thursday']);?></td>
    <td><?php print_r($row['friday']);?></td>
    <td><?php print_r($row['saturday']);?></td>
    <td><?php print_r($row['sunday']);?></td>
    <td><?php print_r($row['fam_plan']);?></td>
    <td><?php print_r($row['ntp']);?></td>
    <td><?php print_r($row['anti_rabies']);?></td>
    <td><?php print_r($row['others']);?></td>
    </tr>
    <?php endwhile;?>
    
    <?php
    function pre_r($array) {
        echo "<pre>";
            print_r($array);
            echo "</pre>";
    }

?>


<?php require_once'sunvalley_night.php'; ?>
        <?php 
        
        $mysqli = new mysqli('localhost','root','','sunvalley_night') or
        die($mysqli->error($mysqli));
        $result = $mysqli->query("SELECT * FROM sunvalley_night_tbl") or die($mysqli->error($mysqli));
        
        
        ?>
 
    
    <tr>
        <th font-weight: bold; ">Time</td>
        <th>Monday</td>
        <th>Tuesday</td>
        <th><b>Wednesday</b></td>
        <th>Thursday</td>
        <th>Friday</td>
        <th>Saturday</td>
        <th>Sunday</td>
        <th>Family Planning</td>
        <th>NTP Medications</td>
        <th>Anti Rabies</td>
        <th>Other Services</td>
        <th> 
    </tr>
    <tr>
        <th>PM</th>
        <th>Medical Consultation</th>
        <th>Pre-Natal</th>
        <th>NIP</th>
        <th>Pre-Natal</th>
        <th>NIP</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th> </th>
        <th> </th>
        <th> </th>
    </tr>
    <tr>
        <form action="sunvalley_night.php" method="post">

            <td><input type="text" name="time" style="width:94%; padding:0.1em;" id=""></td>
            <td><input type="text" name="monday" style="width:94%; padding:0.1em;" id=""></td>
            <td><input type="text" name="tuesday" style="width:94%; padding:0.1em;" id=""></td>
            <td><input type="text" name="wednesday" style="width:94%; padding:0.1em;" id=""></td>
            <td><input type="text" name="thursday" style="width:94%; padding:0.1em;" id=""></td>
            <td><input type="text" name="friday" style="width:94%; padding:0.1em;" id=""></td>
            <td><input type="text" name="saturday" style="width:94%; padding:0.1em;" id=""></td>
            <td><input type="text" name="sunday" style="width:94%; padding:0.1em;" id=""></td>
            <td><input type="text" name="fam_plan" style="width:94%; padding:0.1em;" id=""></td>
            <td><input type="text" name="ntp" style="width:94%; padding:0.1em;" id=""></td>
            <td><input type="text" name="anti_rabies" style="width:94%; padding:0.1em;" id=""></td>
            <td><input type="text" name="others" style="width:94%; padding:0.1em;" id=""></td>
            <td><button type="submit" name="sub">Insert</button></td>
            
        </form>
        </tr>
     
   
<?php
    while($row = $result->fetch_assoc()):?>
    <tr>
    <td><?php print_r($row['time']);?></td>
    <td><?php print_r($row['monday']);?></td>
    <td><?php print_r($row['tuesday']);?></td>
    <td><?php print_r($row['wednesday']);?></td>
    <td><?php print_r($row['thursday']);?></td>
    <td><?php print_r($row['friday']);?></td>
    <td><?php print_r($row['saturday']);?></td>
    <td><?php print_r($row['sunday']);?></td>
    <td><?php print_r($row['fam_plan']);?></td>
    <td><?php print_r($row['ntp']);?></td>
    <td><?php print_r($row['anti_rabies']);?></td>
    <td><?php print_r($row['others']);?></td>
    </tr>
    <?php endwhile;?>
    
    <?php
    function pre_b($array) {
        echo "<pre>";
            print_r($array);
            echo "</pre>";
    }

?>
</table>
</form>

</center>
</body>
  

</html>


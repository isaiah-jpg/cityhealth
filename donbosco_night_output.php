 
<?php
 
 $mysqli = new mysqli('localhost','root','','donbosco_night') 
 or die(mysqli_error($mysqli));
 
 if(isset($_POST["sub"])) { 
         $time = $_POST["time"];
         $monday = $_POST["monday"];
         $tuesday = $_POST["tuesday"];
         $wednesday = $_POST["wednesday"];
         $thursday = $_POST["thursday"];
         $friday = $_POST["friday"];
         $saturday = $_POST["saturday"];
         $sunday = $_POST["sunday"];
         $fam_plan = $_POST["fam_plan"];
         $ntp = $_POST["ntp"];
         $anti_rabies = $_POST["anti_rabies"];
         $others = $_POST["others"];    
         
$mysqli->query("INSERT INTO donbosco_night_tbl(time,monday,tuesday,wednesday,thursday,friday,saturday,sunday,fam_plan,ntp,anti_rabies,others) 
VALUES('$time','$monday','$tuesday','$wednesday','$thursday','$friday','$saturday','$sunday','$fam_plan','$ntp','$anti_rabies','$others')")
or die($mysqli->error);
           print_r("Inserted");
             }   
?>
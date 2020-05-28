<?php 

$mysqli = new mysqli('localhost','root','','hepo_db')
or die(mysqli_error($mysqli));

    if(isset($_POST["save"])) {
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $contact = $_POST["contact"];
        $address = $_POST["address"];
        $district = $_POST["district"];
        $service = $_POST['service'];
        $date = $_POST["date"];
        $mysqli->query("INSERT INTO  hepo_table(firstname,lastname,contactnumber,address,district,service,date)
        VALUES('$firstname','$lastname','$contact','$address','$district','$service','$date')")or 
        die($mysqli->error);
         
    }

?>
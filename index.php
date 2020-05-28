<html>
    <head>
        <title></title>
        <style>
           input[type=text]{
               display:inline ;
                position: relative;
                width: 10em;
                margin:5px;
                padding:7px;
                border-radius: 0.3em;
                border:1px solid rgb(170, 170, 170);
            }
            * {
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            }
            body {
                margin:0;
            }
            form {
               text-align: center;
            }
button {
    width:6em;
    padding:0.2em;
    background: rgb(192, 90, 22);
    color:white;
    font-weight: bold;
    border:none;
    border-radius: 0.2em;
    font-size:1em;
}
table {
    border-collapse: collapse;
    width:100%;
 
    border:2px 2px 2px solid grey;
}
 
 td{
         border:1px solid rgb(255, 255, 255);
    padding:10px;
    font-size:0.9em;
    background: white;
}tr {
    padding:0.3em;
     
     font-size:1.2em;
    box-shadow:  1px 1px 13px 1px rgb(53, 61, 90);
    text-align: center;
}
::selection {
    background:darkslategrey;
    color:white;
}
button:hover {
    background:rgb(57, 61, 99);
}
 
th {
    font-size:0.7em;
    background:rgb(20, 18, 65);
    color:white;
    border: 1px solid rgb(20, 18, 65);
    padding:1.4em;
}
body {
    background: rgb(255, 255, 255);
}
select {
    padding:0.5em;
    width:7em;
    border-radius:0.3em;
}
h1 {
    font-size:1.5em;
    padding:0.9em;
    background: rgb(28, 43, 104);
    color:rgb(255, 255, 255);
    text-align: left;
}
        </style>
    </head>
    <body><center>
        <h1>CHIS OFFICE</h1>
        <form action="process.php" method="post">
            <p> <input placeholder="First Name" type="text" name="firstname" id="">   
               <input placeholder="Last Name" type="text" name="lastname" id="">  
               <input type="text" name="contact" placeholder="Contact number">
                 <input placeholder="Address" type="text" name="address" id="">  
                  <input placeholder="District" type="text" name="district" id=""> 
                  <select name="service" >
                  <option value=" ">Services</option>
                    <option value="Medical Consultation">Medical Consultation</option>
                    <option value="Prenatal">Prenatal</option>
                    <option value="Post Partum">Post Partum</option>
                    <option value="Immunization">Immunization</option>
                    <option value="Family Planning">Family Planning</option>
                    <option value="Dental Consultation">Dental Consultation</option>
                    <option value="Maintenance">Maintenance</option>
                    <option value="TB Maintenance">TB Maintenance</option>
                    <option value="Animal Bite">Animal Bite</option>
                    <option value="Other Services">Other Services</option>
                  </select>
            <input placeholder="Date of Admission" type="text" name="date"> 
                  <button type="submit" name="save" value="submit">Submit</button> 
            </p>
             

        </form>
      
        <?php require_once'process.php'; ?>
        <?php 
            $mysqli = new mysqli('localhost','root','','hepo_db') or
            die($mysqli->error($mysqli));
            $result = $mysqli->query("SELECT * FROM hepo_table") or die($mysqli->error($mysqli));
            //pre_r($result);
            if($result == "") {
                echo "invalid";
            }
 ?>
 <div>
     <table>
         <thead>
             <tr>
                 <th>First Name</th>
                 <th>Last Name</th>
                 <th>Contact Number</th>
                 <th>Address</th>
                 <th>District</th>
                <th>Service</th>
                <th>Date of Admission</th>
                
             </tr>
         </thead>
         <?php
            while($row = $result->fetch_assoc()):?>
            <tr>
                <td><?php  print_r($row['firstname']);?></td>
                <td><?php print_r($row['lastname']);?></td>
                <td><?php print_r($row['contactnumber']);?></td>
                <td><?php print_r($row['address']);?></td>
                <td><?php print_r($row['district']);?></td>
                <td><?php print_r($row['service']);?></td>
                <td><?php print_r($row['date']);?></td>
            </tr>
            <?php endwhile;?>
     </table>
 </div><?php
                function pre_r($array) {
                    echo "<pre>";
                        print_r($array);
                        echo "</pre>";
                }
        
            ?>
       
            
        </body>
        </html>
 

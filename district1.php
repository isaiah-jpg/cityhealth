 
<html>
    <head>
        <title> Schedule</title>
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
                background:rgb(224, 143, 20);
                padding:1.2em;
                width:7em;
                font-weight:bold;
                border-radius:12px;
                color:white;
                font-size:1.1em;
            }
            option {
                background: rgb(12, 22, 65);
                border:none;
                color:white;
                font-size:1.1em;
                
            }
            
            input[type=text] {
                border:none;
                height:1.3em;
                font-size:1em;
                background-color: inherit;
                border:1px solid rgb(150, 216, 132);
            }
            select {
                padding:1em;
                font-size:1.2em;
                width:35em;
                border:1px solid rgb(18, 48, 148);
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
    <?php 
        if(isset($_POST["next"])) {
            $dis1  = $_POST["dis1"];
            if($dis1 == 'la huerta') {
                header("Location:lh.php");
            }
            else if ($dis1 == "baclaran") {
                header("Location:bac.php");
            }
            else if($dis1 == 'Don Galo') {
                header("Location:dg.php");
            }
            else if($dis1 == 'san dionisio') {
                header("Location:sd.php");
            }
            else if($dis1 == 'san isidro') {
                header("Location:si.php");
            }
            else if($dis1 ==  'sto.niño') {
                header("Location:snino.php");
            }
            else if($dis1 == 'tambo') {
                header("Location:t.php");
            }
            else if ($dis1 == 'vitalez') {
                header("Location:vit.php");
            }
            else if($dis1 == 'bf') {
                header("Location:b.php");
            }
            else if($dis1 == 'don bosco') {
                header("Location:dbosco.php");
            }
            else if($dis1 == 'marcelo green') {
                header("Location:mgreen.php");
            }
            else if($dis1 == 'merville') {
                header("Location:mville.php");
            }
            else if($dis1 == 'moonwalk') {
                header("Location:mwalk.php");
            }
            else if($dis1 == 'san antonio') {
                header("Location:sa.php");
            }
            else if($dis1 == 'san martin') {
                header("Location:smartin.php");
            }
            else if($dis1 == 'sun valley') {
                header("Location:sv.php");
            }
        } 
    ?>
    <body> <h1 style="background:rgb(19, 33, 63);padding:0.7em; color:white;">Schedule</h1>
        
        <center>
        
 
<b><p style="font-size: 1.5em;letter-spacing:0.1em;">The New Normal Schedule</p></b>
<h4 style="color:black;">Please Select Baranggay</h4>
<form action="" method="post">

    <select name="dis1">
        <option style="background:rgb(110, 110, 110);" value="">District 1</option>
        <option value="baclaran">Baclaran</option>
        <option value="Don Galo">Don Galo</option>
        <option  value="la huerta">La Huerta</a></option>
        <option value="san dionisio">San Dionisio</option>
        <option value="san isidro">San Isidro</option>
        <option value="sto.niño">Sto.Niño</option>
        <option value="tambo">Tambo</option>
        <option value="vitalez">Vitalez</option>
        <option style="background:rgb(110, 110, 110);" value="">District 2</option>
        <option value="bf">BF</option>
        <option value="don bosco">Don Bosco</option>
        <option value="marcelo green">Marcelo Green</option>
        <option value="merville">Merville</option>
        <option value="moonwalk">Moonwalk</option>
        <option value="san antonio">San Antonio</option>
        <option value="san martin">San Martin de Porres</option>
        <option value="sun valley">Sun Valley</option>
        
    </select>
   
    <button style="border-radius: 6px; margin:3px;" type="submit" name="next">Select</button>
</form>
    
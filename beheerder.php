<?php
if (isset($_POST['submit'])) {
        require("dbconnect.php");
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

        
            function safe($waarde)
            {
                $waarde = trim($waarde);
                $waarde = stripslashes($waarde);
                $waarde = htmlspecialchars($waarde);
            }
            
        }
        $evenement_id = $_POST['evenement-id'];
        $datum = $_POST['datum'];
        $artiest_id = $_POST['artiest-id'];
        $locatie_id = $_POST['locatie-id'];
        $max_bezoekers = $_POST['max-bezoekers'];
        $sql = "INSERT INTO evenementen
        VALUES ('$evenement_id', '$datum', '$artiest_id',
        '$locatie_id', '$max_bezoekers')";
        
        if($conn->query($sql)){
            echo "toegevoegd aan database";
        } 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method='POST'>
<input type="number" name="evenement-id" placeholder='evenement'>
<br>
<input type="date" name="datum" placeholder='datum'>
<br>
<input type="number" name="artiest-id" placeholder='artiest'>
<br>
<input type="number" name="locatie-id" placeholder='locatie'>
<br>
<input type="number" name="max-bezoekers" placeholder='bezoekers'>
<br>


<input type="submit" value="submit" name='submit'>
<br>

</form>
</body>
</html>

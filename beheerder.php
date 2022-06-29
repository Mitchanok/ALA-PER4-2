<?php
if (isset($_POST['store'])) {
        require("dbconnect.php");
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

        
            function safe($waarde)
            {
                $waarde = trim($waarde);
                $waarde = stripslashes($waarde);
                $waarde = htmlspecialchars($waarde);
            }
            
        }
        $merk = $_POST['merks'];
        $model = $_POST['models'];
        $maat = $_POST['maats'];
        $prijs = $_POST['prijss'];
        $sql = "INSERT INTO schoenen
        VALUES (NULL, '$merk', '$model', '$maat',
        '$prijs')";
        
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
<input type="text" name="merks" placeholder='merk'>
<br>
<input type="text" name="models" placeholder='model'>
<br>
<input type="number" name="maats" placeholder='maat'>
<br>
<input type="number" name="prijss" placeholder='prijs'>
<br>


<input type="submit" value="store" name='store'>
<br>

</form>
</body>
</html>

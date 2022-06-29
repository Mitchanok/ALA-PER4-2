<?php
if (isset($_POST['Submit'])) {
  
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
       
        require("dbconnect.php");

        $username = ($_POST['username']);
        $password = ($_POST['password']);
        
        $sql = "SELECT * FROM gebruikers WHERE username = '".$username."'";

        if($result = $conn->query($sql)){
            $row = $result->fetch_row();
            $password = $row[2];
            
            $aantal = $result->num_rows;
            if($aantal == 1){
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                header("Location: beheerder.php");
            } else {
                $error = "niet de juiste gegevens ingeluld";
            }
        }
    }   else {
        $error = "username en wactwoord verplicht";
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
<input type="tekst" name="username" placeholder='username'>
<br>
<input type="password" name="password" placeholder='password'>
<br>
<input type="submit" value="submit" name='Submit'>
</form>
</body>
</html>

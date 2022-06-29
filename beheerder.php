<!DOCTYPE HTML>
<html>
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta http-equiv="language" content="NL">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="ALA groep 4">
      <meta name="keywords" content="">
      <title>Flavoury</title>
   <link rel="stylesheet" href="css/navbar.css">
   <link rel="stylesheet" href="css/beheerder.css">
   </head>
   <body>
      <article class="main">
         <nav>
            <label class="logo"><img src="images/LOGOrfrfrfr.png" height="100px" width="280px" alt="logo"></label>
            <ul>
               <li><a href="homepage.html">Home</a></li>
               <li><a class="active" href="product.html">Product</a>
               <i class="fas fa-caret-down"></i>
               <ul>
                <li><a href="#">aanbieding</a>
                 <li><a href="bedrijf.html">bedrijfinformatie</a>
               </ul>
             </li>
             </li>
              </li>
               <li>
                  <a href="evenement.html">Evenement</a>
                  <i class="fas fa-caret-down"></i>
                  </a>
                  <ul>
                     <li><a href="artiesten.php">artiesten</a></li>
                  </ul>
               </li>
               <li>
                  <a href="contact.html">Contact</a>
                     <li>
                        <a href="over.html">Over ons</a>
                        </ul>
                     </li>
                  </ul>
               </li>
            </ul>
         </nav>
               </nav>
      </article>
      <br>
      <br>


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
<section class="input">
    <form method='POST'>
<input class="ding" type="number" name="evenement-id" placeholder='evenement'>
<br>
<input class="ding" type="date" name="datum" placeholder='datum'>
<br>
<input class="ding" type="number" name="artiest-id" placeholder='artiest'>
<br>
<input class="ding" type="number" name="locatie-id" placeholder='locatie'>
<br>
<input class="ding" type="number" name="max-bezoekers" placeholder='bezoekers'>
<br>
<br>

<input  class="ding" type="submit" value="submit" name='submit'>
<br>

</form>
</section>
<footer class="Footer">
        <img class="telefoon" src="images/phone_icon_clip_art.jpg" alt="telefoon" height="20px"><p class="footerp">0653177832</p>
        <p class="copyright">copyright flavoury©</p>
        <img class="Email" src="images/download.png" alt="mail" height="20px"><p>flavoury@gmail.com</p>           
     </footer>
   </body>
   </html>
</body>
</html>

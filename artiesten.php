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
   <link rel="stylesheet" href="css/artiesten.css">
   <link rel="stylesheet" href="css/navbar.css">
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
                     <li><a href="artiesten.html">artiesten</a></li>
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
require('dbconnect.php')
?>
<article>
  <?php
    $sql = "SELECT * FROM artiesten";
    if($result = $conn->query($sql)){
        while ($row = $result->fetch_row()){
            echo $row[1]."<br> <br>";
           }
        $result->close();
    }
    
    
    ?>
</article>
<?php

$error = "";
 if(isset($_POST['submit'])){
     if(!empty($_POST['username']) && !empty($_POST['password'])){
         $username = $_POST['username'];
         $password = $_POST['password'];
        $guser = "";
        $gpass = "";
        if($username == $guser && $password == $gpass) {
        session_start();
        $_SESSION['ingelogd'] = true;
        header("location: klanten.php");
        }
     }else {
             $error = "gegevens zijn verplicht";
        }
     }
?>

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
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
     <article class="main">
        <header>
              <nav>
                 <label class="logo"><img src="images/LOGOrfrfrfr.png" height="100px" width="280px" alt="logo"></label>
                 <ul>
                    <li><a class="active" href="homepage.html">Home</a></li>
                    <li><a href="product.html">Product</a>
                    <i class="fas fa-caret-down"></i>
                    <ul>
                     <li><a href="#">aanbieding</a>
                    </ul>
                  </li>
                  </li>
                    <li>
                       <a href="evenement.html">Evenement</a>
                       <i class="fas fa-caret-down"></i>
                       </a>
                       <ul>
                          <li><a href="#">artiesten</a></li>
                       </ul>
                    </li>
                    <li>
                       <a href="contact.html">Contact</a>
                          <li>
                             <a href="over.html">Over ons</a>
                             <a href="inloggen.php">Log in</a>
                        </ul>
                     </li>
                        
                        </li>
                    </li>
                 </ul>

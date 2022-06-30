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
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/navbar.css">

    </head>
    <body>
     <article class="main">
              <nav>
                    <label class="logo"><img src="images/LOGOrfrfrfr.png" height="100px" width="280px" alt="logo"></label>
                    <ul>
                       <li><a  href="homepage.html">Home</a></li>
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
                          <a class="active" href="contact.html">Contact</a>
                             <li>
                                <a href="over.html">Over ons</a>
                                </ul>
                             </li>
                          </ul>
                       </li>
                    </ul>
            </nav>
            <div class="afspraak">
                <form action="cont.php">
                    <div class="formulier-groep">
                        <label for="voornaam">naam </label>
                        <input type="text" id="voornaam" name="voornaam" required>
                    </div>
                    <div class="formulier-groep">
                        <label for="mail">e-mail</label>
                        <input type="mail" id="mail" name="mail"   required>
                    </div>
                    <div class="formulier-groep">
                        <label for="datum">Datum</label>
                        <input type="date" id="datum" name="datum" required>
                    </div>
        
                    <div class="formulier-groep">
                     <label for="bericht">Toelichting</label>
                     <textarea name="massage" id="bericht" cols="30" rows="5"></textarea>
                    </div>
        
                    <button type="submit">Versturen</button>
                </form>
     </article>

    </body>
</html>
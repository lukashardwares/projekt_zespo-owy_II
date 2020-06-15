<?php

session_start();

?>



<!DOCTYPE html>
<html lang="pl">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge" />
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap" rel="stylesheet" />
      <link rel="stylesheet" href="./style.css" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <title>Sklep komputerowy Harddesire</title>
	  
	  <script>
         function okienko() {
           var popup = document.getElementById("myPopup");
           popup.classList.toggle("show");
         }
         function okienko2() {
           var popup1 = document.getElementById("myPopup1");
           popup.classList.toggle("show1");
         }
         
          var i = 0,obrazy = ["./obrazy/matebook.png",
                                         "./obrazy/xd.png",
         								"./obrazy/1234.png"
                                         ];
                                     
                   function mySlide(param)
                   {
                       if(param === 'next')
                       {
                           i++;
                           if(i === obrazy.length){ i = obrazy.length - 1; }
                       }else{
                           i--;
                           if(i < 0){ i = 0; }
                       }
                       
                       document.getElementById('slide').src = obrazy[i];
                   }
         
      </script>

   </head>
   <body>
	   <div class="popup" onclick="okienko()">
		  <span class="popuptext" id="myPopup">
			 Niezależnie od tego, czy będzie to praca, czy rozrywka, ASUS X509 to laptop klasy podstawowej oferujący wysoką wydajność oraz immersyjne efekty wizualne. Zintegrowany w nim ekran NanoEdge umożliwia oglądanie pod szerokim kątem maks. 178° oraz dysponuje matową powłoką antyodblaskową – dla naprawdę wciągających wrażeń. W maksymalnej konfiguracji laptop jest wyposażony w procesor Intel® Core™ i7 8. generacji wraz z 16 GB pamięci RAM 2400 MHz, a ponadto niezależną kartę graficzną NVIDIA® MX250. Możliwość instalacji dwóch dysków, maks. SSD PCIe® 512 GB oraz HDD 1 TB, zapewnia Ci idealne połączenie dużej pojemności dyskowej z wysokimi prędkościami odczytu/zapisu danych. Dostępna jest nawet pamięć Intel Optane™1 do przyspieszenia zadań.
			 <h1>Cena: 3000zł</h1>
		  </span>
	   </div>
      <!-- <header> -->
      <nav>
         <ul class="linki">
            <li><a class="nav-link" href="#">Specyfikacja</a></li>
            <li><a class="nav-link" href="produkty.php" >Produkty</a></li>
            <li><a class="nav-link"onclick="okienko()" href="#" >Kontakt</a> </li>
			<?php if(isset($_SESSION['zalogowany'])): ?>
				<li><a class="nav-link" href="wyloguj.php">Wyloguj </a></li>
				<li><a class="nav-link" href="konto.php">Twoje konto</a></li>
				<li>Witaj, <?php echo $_SESSION['klient']['imie'].' '.$_SESSION['klient']['nazwisko']; ?></li>
			<?php else: ?>
				<li><a class="nav-link" href="zaloguj.php">Zaloguj </a></li>
				<li><a class="nav-link" href="rejestruj.php">Rejestruj </a></li>
			<?php endif; ?>
         </ul>
      </nav>
	  
      <div class="naglowek">
         <p> WITAMY W SKLEPIE HARDDESIRE !</p>
      </div>
      <div class="podgłowek">
         <p></p>
      </div>
      <div class="koszyk">
         <img src="./obrazy/cart.svg" alt="cart" />
      </div>
      </header>

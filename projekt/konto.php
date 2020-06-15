<?php 

require_once('gora_strony.php'); 

if(isset($_POST['wyslany'])){
	//zalaczam kod laczacy sie z baza
	require_once('connect.php');

	//sprawdzam czy istnieje konto z podanym loginem i haslemm jednoczesnie pobieram wszystkie dane klienta
	$wynik = $conn->query("
						SELECT * FROM klienci kl 
						LEFT JOIN kontakty ko ON ko.id_kontakt = kl.id_kontakt_fk 
						LEFT JOIN adresy ad ON ad.id_adres = kl.id_adres_fk
						WHERE kl.login = '{$_POST['login']}' AND kl.haslo = '{$_POST['haslo']}' ");
	$dane = mysqli_fetch_assoc($wynik);

	if(isset($dane['id_klient'])){
		$_SESSION['zalogowany'] = true;
		$_SESSION['klient'] = $dane;
		$komunikat = 'Zostałeś zalogowany, przekierowywanie na strone główną <meta http-equiv="refresh" content="3; strona.php" />';
	}else{
		$komunikat = 'Login lub hasło niepoprawne';
	}
}

?>

      <main style="margin: 10px 50px;">
		<h2>Konto</h2>

		Imie: <?php echo $_SESSION['klient']['imie']; ?><br />
		Nazwisko: <?php echo $_SESSION['klient']['nazwisko']; ?><br />
		Telefon: <?php echo $_SESSION['klient']['nr_tel_1']; ?><br />
		Fax: <?php echo $_SESSION['klient']['fax']; ?><br />
		E-mail: <?php echo $_SESSION['klient']['email']; ?><br />
		Miejscowość: <?php echo $_SESSION['klient']['miejscowosc']; ?><br />
		Ulica: <?php echo $_SESSION['klient']['ulica']; ?><br />
		Numer: <?php echo $_SESSION['klient']['nr_mieszkania']; ?><br />
		Kod pocztowy: <?php echo $_SESSION['klient']['kod_pocztowy']; ?><br />
      </main>
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
   </body>
</html>
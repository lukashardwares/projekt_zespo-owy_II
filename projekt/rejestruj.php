<?php 

require_once('gora_strony.php'); 

if(isset($_POST['wyslany'])){
	if(
			empty($_POST['imie']) &&
			empty($_POST['nazwisko']) &&
			empty($_POST['login']) &&
			empty($_POST['miejscowosc']) &&
			empty($_POST['ulica']) &&
			empty($_POST['numer']) &&
			empty($_POST['kod']) &&
			empty($_POST['telefon']) &&
			empty($_POST['fax']) &&
			empty($_POST['email']) &&
			empty($_POST['haslo1']) &&
			$_POST['haslo1'] != $_POST['haslo2']){
		$komunikat = 'Niepoprawne dane';
	}else{
		//zalaczam kod laczacy sie z baza
		require_once('connect.php');

		$wynik = $conn->query("
					SELECT * FROM klienci 
					WHERE login = '{$_POST['login']}'");
		$dane = mysqli_fetch_assoc($wynik);

		if(isset($dane['id_klient'])){
			$komunikat = 'Login jest już zajęty';
		}else{		
			//dodaje adres
			$conn->query("INSERT INTO adresy (miejscowosc, kod_pocztowy, ulica, nr_mieszkania) VALUES ('{$_POST['miejscowosc']}','{$_POST['kod']}','{$_POST['ulica']}','{$_POST['numer']}')");
			//pobieram id nowo dodanego adresu
			$wynik = $conn->query("SELECT id_adres FROM adresy ORDER BY id_adres DESC LIMIT 1");
			$id_adres = mysqli_fetch_assoc($wynik)['id_adres'];
			
			//dodaje kontakt
			$conn->query("INSERT INTO kontakty (nr_tel_1, fax, email) VALUES ('{$_POST['telefon']}','{$_POST['fax']}','{$_POST['email']}')");
			//pobieram id nowo dodanego kontaktu
			$wynik = $conn->query("SELECT id_kontakt FROM kontakty ORDER BY id_kontakt DESC LIMIT 1");
			$id_kontakt = mysqli_fetch_assoc($wynik)['id_kontakt'];
			
			//dodaje klienta
			$wynik = $conn->query("INSERT INTO klienci (id_adres_fk, id_kontakt_fk, login, haslo, imie, nazwisko) VALUES ('{$id_adres}','{$id_kontakt}','{$_POST['login']}','{$_POST['haslo1']}','{$_POST['imie']}','{$_POST['nazwisko']}')");

			$komunikat = 'Konto zostało utworzone, można się logować';
		}
	}
}

?>

      <main style="margin: 10px 50px;">
		<h2><?php echo @$komunikat; ?></h2>
		<form method="POST">
			Imię:<br />
			<input type="input" name="imie" /><br />
			Nazwisko:<br />
			<input type="input" name="nazwisko" /><br />
			Login:<br />
			<input type="input" name="login" /><br />
			Miejscowość:<br />
			<input type="input" name="miejscowosc" /><br />
			Ulica:<br />
			<input type="input" name="ulica" /><br />
			Nr budynku/mieszkania:<br />
			<input type="input" name="numer" /><br />
			Kod pocztowy:<br />
			<input type="input" name="kod" /><br />
			Telefon:<br />
			<input type="input" name="telefon" /><br />
			Fax:<br />
			<input type="input" name="fax" /><br />
			E-mail:<br />
			<input type="input" name="email" /><br />
			Hasło:<br />
			<input type="input" name="haslo1" /><br />
			Powtórz hasło:<br />
			<input type="input" name="haslo2" /><br />
			<br />
			<br />
			<input type="submit" name="wyslany" value="Rejestruj" />
			<br /><br /><br /><br />
		</form>
		
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
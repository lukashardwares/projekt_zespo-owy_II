<?php 

require_once('gora_strony.php'); 

//zalaczam kod laczacy sie z baza
require_once('connect.php');


//pobieram dane wszystkich produktow
$wynik = $conn->query("SELECT * FROM produkty");

?>

      <main style="margin: 10px 50px; text-align: center;">
		<h2>Produkty</h2>
		
		<?php while($produkt = mysqli_fetch_array($wynik)): ?>
		
			<hr />
			<hr />
			<img src="produkty/<?php echo $produkt['fotografia'];?>" style="width: 70%; margin: 20px;" />
			
			<h3><big><?php echo $produkt['aktualna_cena_sprzedazy']; ?> PLN </big> &nbsp; &nbsp;  <?php echo $produkt['nazwa_produktu']; ?></h3>
			
			<p><?php echo $produkt['opis']; ?></p>
		
		<?php endwhile; ?>
		
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
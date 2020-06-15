<?php 

require_once('gora_strony.php'); 

session_destroy();



?>

      <main style="margin: 10px 50px;">
		<h2>Zostałeś wylogowany, zaraz nastąpi przekierowanie</h2>

		<meta http-equiv="refresh" content="3; strona.php" />
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
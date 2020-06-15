<?php 

require_once('gora_strony.php'); 

?>

      <main>
         <section class="prezentacja">
            <div class="wprowadzenie">
               <div class="wstęp">
                  <h1>Znajdź to czego szukasz</h1>
                  <p>
                     Laptopy i komputery najnowszej generacji tylko tu!
                  </p>
               </div>
               <div class="napis2">
                  <p> Zamów teraz:</p>
                  <br></br>
                  <form action="connect.php" method="POST">
                     Imię: <input type="text" name="fname" ><br></br>
                     Nazwisko:<input type="email" name="umail" ><br></br>
                     Mail: <input type="text" name="ucon" ><br></br>
                     <input type="submit"name="submit" value="Zamawiam">
                  </form>
               </div>
            </div>
            <div class="zdjęcie">
               <img src="./obrazy/matebook.png" alt="matebook"id="slide" />
            </div>
         </section>
         <div class="zmień">
            <img src="./obrazy/arrow-left.svg" alt=""onclick="mySlide('prev');" />
            <img src="./obrazy/dot-full.svg" alt=""  />
            <img src="./obrazy/dot-full.svg" alt=""  />
            <img src="./obrazy/dot-full.svg" alt="" />
            <img src="./obrazy/arrow-right.svg" alt=""  onclick="mySlide('next');"/>
         </div>
         <img class="big-circle" src="./obrazy/big-eclipse.svg" alt="" />
         <img class="medium-circle" src="./obrazy/mid-eclipse.svg" alt="" />
         <img class="small-circle" src="./obrazy/small-eclipse.svg" alt="" />
         <div id="dalej">
         <div class="oferta">
            <br></br>
            <br></br>
            <br></br>
            <br></br>
            <br></br>
            <h1>Wybierz z szerszej oferty!</h1>
            <div class="square">
               <div class="tile">
                  <img src="./obrazy/matebook.png" alt="matebook"id="imgClickAndChange" />
               </div>
            </div>
            <div class="square">
               <div class="tile">
                  <img src="./obrazy/xd.png" alt="matebook" id="imgClickAndChange"/>
               </div>
            </div>
         </div>
         <div class="opis">
            <h1>Od niespotykanej wcześniej szybkości uruchamiania, poprzez obsługę dotykową, aż po funkcje rozpoznawania głosu i twarzy – bardzo szybko zdasz sobie sprawę, jak wysoko postawiliśmy poprzeczkę. Niezwykle krótki czas reakcji pozwala na błyskawiczne przełączanie pomiędzy aplikacjami i przeglądanie zasobów sieci, a dzięki obsłudze rozdzielczości 4K Ultra HD poznasz zupełnie nowy poziom wrażeń multimedialnych. Grafika bliska rzeczywistości, nadzwyczajna szybkość połączeń dla łatwego przesyłania danych i wyświetlania zawartości oraz wbudowane zabezpieczenia chroniące wszystkie najcenniejsze dane – to tylko ułamek możliwości nowej generacji procesorów. Co więcej, dzięki obsłudze nowych, zaskakujących funkcji systemu Windows 10, procesory Intel® Core™ i5 i i7 6-tej generacji pozwalają puścić wodze fantazji i poznać świat zupełnie nowych wrażeń użytkowych.</h1>
         </div>
         <div style="clear:both;"></div>
         <footer>
            <h1>Kontakt</h1>
         </footer>
      </main>
   </body>
</html>
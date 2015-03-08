<!DOCTYPE html>

<html lang="fr" class="no-js">

   <head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>PartyPix - Evènement</title>

      <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">
      <link rel="stylesheet" href="css/styles.css">
      <link rel="stylesheet" type="text/css" href="css/default.css" />
      <link rel="stylesheet" type="text/css" href="css/component.css" />
      <link rel="stylesheet" type="text/css" href="css/tab.css" />
      <link rel="icon" type="image/png" href="favicon.png" />

      <script src="js/functions.js"></script>
      <script src="js/modernizr.custom.js"></script>
      <!--[if IE]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
   </head>

   <body>

      <?php include 'tpl/header.php'; ?>

      <div id="tabs" class="tabs">

         <h1 style="padding-bottom: 10px; text-align: center;">Evènement : Party ON</h1>

         <nav>
            <ul>
               <li><a href="#section-1" class="icon-shop"><span>Lieu</span></a></li>
               <li><a href="#section-2" class="icon-cup"><span>Boissons</span></a></li>
               <li><a href="#section-3" class="icon-food"><span>Nourriture</span></a></li>
               <li><a href="#section-4" class="icon-vynil"><span>Musique</span></a></li>
               <li><a href="#section-5" class="icon-truck"><span>Accès</span></a></li>
            </ul>
         </nav>

         <div class="content">
            <div class="mediabox">
               <br>
               <img src="images/partypic.jpg" alt="img01" />
            </div>
            <section id="section-1">
               <div class="mediabox">
                  <!-- <h2>Lieu de l'évènement:</h2> -->
                  <br>
                  <img src="images/lieu.png" alt="img01" />
                  <br>
                  <p>Party ON se déroulera le samedi 26 mars 2015 à Herblay dans le Val d'Oise.</p>

                  <form name="place" action="index.php" method="get">

                     <fieldset class="clearfix">

                        <b>France</b>, Val d'Oise<br>
                        <b>Herblay</b> - 95220<br>
                        33 allée des bournourviers<br>

                     </fieldset>

                  </form>

               </div>
            </section>
            <section id="section-2">
               <div class="mediabox">
                  <!-- <h2>Boisssons présentes :</h2> -->
                  <br>
                  <img src="images/boissons.png" alt="img01" />
                  <br>
                  <p>Boissons présentes au début de l'évènement (hors apport des invités).</p>
                  <form name="place" action="index.php" method="get">

                     <fieldset class="clearfix">

                        - Vodka<br>
                        - Coca<br>
                        - Sprite<br>
                        - Jus d'orange<br>

                     </fieldset>

                  </form>

               </div>
            </section>
            <section id="section-3">
               <div class="mediabox">
                  <!-- <h2>Nourriture présente :</h2> -->
                  <br>
                  <img src="images/nourriture.png" alt="img01" />
                  <br>
                  <p>Nourriture présent au début de l'évènement (hors apport des invités).</p>

                  <form name="place" action="index.php" method="get">

                     <fieldset class="clearfix">

                        - Quiches<br>
                        - Cheese Cake<br>
                        - Pizza<br>
                        - SPace Cake<br>

                     </fieldset>

                  </form>
               </div>
            </section>
            <section id="section-4">
               <div class="mediabox">
                  <!-- <h2>Musicothèque :</h2> -->
                  <br>
                  <img src="images/musique.png" alt="img01" />
                  <br>
                  <p>Playlist de l'évènement.</p>

                  <form name="place" action="index.php" method="get">

                     <fieldset class="clearfix">

                        <br>
                        <img src="images/spotify.png" alt="img01" />
                        <br>
                        <p><p style="color: #a1cb2f;">Extrait des artistes présents :</p> Avicii, 3dLau, Pendulum, Deorro...</p>
                        <br>
                        <p><input type="submit" value="Voir sur Spotify"></p>

                     </fieldset>

                  </form>

               </div>
            </section>
            <section id="section-5">
               <div class="mediabox">
                  <!-- <h2>Moyens de transport :</h2> -->
                  <br>
                  <img src="images/acces.png" alt="img01" />
                  <br>
                  <p>Les différents moyens d'accès pour se rendre à l'évènement (co-voiturage, métro, bus...).</p>

                  <form name="place" action="index.php" method="get">

                     <fieldset class="clearfix">

                        <!-- <h3>Pour vous rendre à l'évènement de Party ON :</h3> -->

                        <p style="color: #99c73a;">En transport en commun :</p>
                        <p>- Vous pouvez prendre la ligne 6 jusqu’à la station Bir-Hakeim, ou la ligne 9 jusqu’à la station Trocadéro.<br>
                           - En dix minutes de marche, vous êtes arrivé à l'évènement.</p>

                        <p style="color: #99c73a;">En voiture :</p>
                        <p>- Prendre le Cours la Reine, puis Cours Albert 1er,<br>
                           - Continuer sur l'avenue de New York puis l'avenue du Président Kennedy<br>
                           - A la hauteur de la Maison Radio France, prendre à gauche le pont de Grenelle<br>
                           - Traverser le quai André Citroën pour arriver rue Linois.</p>

                     </fieldset>

                  </form>

               </div>
            </section>
         </div><!-- /content -->
      </div><!-- /tabs -->

      <script src="js/cbpFWTabs.js"></script>
      <script>
         new CBPFWTabs( document.getElementById( 'tabs' ) );
      </script>

      <script>
         //  The function to change the class
         var changeClass = function (r,className1,className2) {
            var regex = new RegExp("(?:^|\\s+)" + className1 + "(?:\\s+|$)");
            if( regex.test(r.className) ) {
               r.className = r.className.replace(regex,' '+className2+' ');
            }
            else{
               r.className = r.className.replace(new RegExp("(?:^|\\s+)" + className2 + "(?:\\s+|$)"),' '+className1+' ');
            }
            return r.className;
         };

         //  Creating our button in JS for smaller screens
         var menuElements = document.getElementById('menu');
         menuElements.insertAdjacentHTML('afterBegin','<button type="button" id="menutoggle" class="navtoogle" aria-hidden="true"><i aria-hidden="true" class="icon-menu"> </i> Menu</button>');

         //  Toggle the class on click to show / hide the menu
         document.getElementById('menutoggle').onclick = function() {
            changeClass(this, 'navtoogle active', 'navtoogle');
         }

         // http://tympanus.net/codrops/2013/05/08/responsive-retina-ready-menu/comment-page-2/#comment-438918
         document.onclick = function(e) {
            var mobileButton = document.getElementById('menutoggle'),
            buttonStyle =  mobileButton.currentStyle ? mobileButton.currentStyle.display : getComputedStyle(mobileButton, null).display;

            if(buttonStyle === 'block' && e.target !== mobileButton && new RegExp(' ' + 'active' + ' ').test(' ' + mobileButton.className + ' ')) {
               changeClass(mobileButton, 'navtoogle active', 'navtoogle');
            }
         }
      </script>

   </body>

</html>

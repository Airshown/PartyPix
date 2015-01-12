<!DOCTYPE html>

<html lang="fr" class="no-js">

   <head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>PartyPix - Créer un évènement</title>

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

         <h1 style="padding-bottom: 10px; text-align: center;">Créer un évènement</h1>

         <nav>
            <ul>
               <li><a href="#section-1" class="icon-shop"><span>Lieu</span></a></li>
               <li><a href="#section-2" class="icon-cup"><span>Boissons</span></a></li>
               <li><a href="#section-3" class="icon-food"><span>Nourriture</span></a></li>
               <li><a href="#section-4" class="icon-vynil"><span>Musicothèque</span></a></li>
               <li><a href="#section-5" class="icon-truck"><span>Transport</span></a></li>
            </ul>
         </nav>

         <div class="content">
            <section id="section-1">
               <div class="mediabox">
                  <h2>Lieu de l'évènement:</h2>
                  <br>
                  <img src="images/01.png" alt="img01" />
                  <br>
                  <p>Veuillez entrer l'emplacement de l'évènement.</p>

                  <form name="place" action="index.php" method="get">

                     <fieldset class="clearfix">

                        <input type="text" placeholder="Pays"><br>
                        <input type="text" placeholder="Ville"><br>
                        <input type="text" placeholder="N°" style="width: 60px;"> <input type="text" placeholder="Rue"><br>
                        <p><input type="submit" value="Sauvegarder"></p>

                     </fieldset>

                  </form>

               </div>
            </section>
            <section id="section-2">
               <div class="mediabox">
                  <h2>Boisssons présentes :</h2>
                  <br>
                  <img src="images/04.png" alt="img04" />
                  <br>
                  <p>Boissons présentes au début de l'évènement (hors apport des invités).</p>
                  <form name="place" action="index.php" method="get">

                     <fieldset class="clearfix">

                        <input type="text" placeholder="+" style="width: 40px;"> <input type="text" placeholder="Alcool"><br>
                        <input type="text" placeholder="+" style="width: 40px;"> <input type="text" placeholder="Soda"><br>
                        <input type="text" placeholder="+" style="width: 40px;"> <input type="text" placeholder="Jus de fruits"><br>
                        <p><input type="submit" value="Sauvegarder"></p>

                     </fieldset>

                  </form>

               </div>
            </section>
            <section id="section-3">
               <div class="mediabox">
                  <h2>Nourriture présente :</h2>
                  <br>
                  <img src="images/02.png" alt="img02" />
                  <br>
                  <p>Nourriture présent au début de l'évènement (hors apport des invités).</p>

                  <form name="place" action="index.php" method="get">

                     <fieldset class="clearfix">

                        <input type="text" placeholder="+" style="width: 40px;"> <input type="text" placeholder="Appéritif"><br>
                        <input type="text" placeholder="+" style="width: 40px;"> <input type="text" placeholder="Entrées"><br>
                        <input type="text" placeholder="+" style="width: 40px;"> <input type="text" placeholder="Plat"><br>
                        <input type="text" placeholder="+" style="width: 40px;"> <input type="text" placeholder="Desserts"><br>
                        <input type="text" placeholder="+" style="width: 40px;"> <input type="text" placeholder="Autres"><br>
                        <p><input type="submit" value="Sauvegarder"></p>

                     </fieldset>

                  </form>
               </div>
            </section>
            <section id="section-4">
               <div class="mediabox">
                  <h2>Musicothèque :</h2>
                  <br>
                  <img src="images/03.png" alt="images03" />
                  <br>
                  <p>Ajout d'une ou de plusieurs listes de lecture pour l'évènement.</p>

                  <form name="place" action="index.php" method="get">

                     <fieldset class="clearfix">

                        <input type="text" placeholder="+" style="width: 40px;"> <input type="text" placeholder="Titre - Artiste"><br>
                        <p><input type="submit" value="Sauvegarder"></p>

                     </fieldset>

                  </form>

               </div>
            </section>
            <section id="section-5">
               <div class="mediabox">
                  <h2>Moyens de transport :</h2>
                  <br>
                  <img src="images/02.png" alt="img02" />
                  <br>
                  <p>Proposez les différents moyens d'accès pour se rendre à l'évènement (co-voiturage, métro, bus...).</p>

                  <form name="place" action="index.php" method="get">

                     <fieldset class="clearfix">

                        <input type="text" placeholder="+" style="width: 40px;"> <input type="text" placeholder="Moyen de transport"><br>
                        <p><input type="submit" value="Sauvegarder"></p>

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

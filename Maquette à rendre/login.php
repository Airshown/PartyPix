<!DOCTYPE html>

<html lang="fr" class="no-js">

   <head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>PartyPix - Login</title>

      <link rel="stylesheet" href="css/styles.css">
      <link rel="stylesheet" type="text/css" href="css/default.css" />
      <link rel="stylesheet" type="text/css" href="css/component.css" />
      <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">
      <link rel="icon" type="image/png" href="favicon.png" />
      
      <script src="js/functions.js"></script>
      <script src="js/modernizr.custom.js"></script>
      <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
      <script language="javascript">
      	function check(name)
      	{
      		if(document.getElementById('user').value != 'Utilisateur' || document.getElementById('password').value != 'Mot de passe')
      		{
               if(name == "user" && document.getElementById('user').value != 'Utilisateur'){
                  var ico = document.getElementById('icon');
      			   icon.className = icon.className + " active";
               }

               if(name == "lock" && document.getElementById('password').value != 'Mot de passe')
               {
                  var ico2 = document.getElementById('icon2');
                  icon2.className = icon2.className + " active";
               }
      		}

            if(document.getElementById('user').value == 'Utilisateur')
            {
               if(name == "user"){
                  var ico = document.getElementById('icon');
                  icon.className = "fontawesome-user";
               }
            }

            if(document.getElementById('password').value == 'Mot de passe')
            {
               if(name == "lock")
               {
                  var ico2 = document.getElementById('icon2');
                  icon2.className = "fontawesome-lock";
               }
            }
      	}
      </script>

   </head>

   <body>

      <header>
            <div id="logo">
               <figure>
                  <img src="images/logo.png" alt="PartyPix" width="150" height="109" />
               </figure>
            </div>
         <!-- <div class="container"> -->
            <div class="main clearfix">
               <nav id="menu" class="nav">
                  <ul>
                     <li>
                        <a href="#">
                           <span class="icon">
                              <i aria-hidden="true" class="icon-home"></i>
                           </span>
                           <span>Home</span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <span class="icon">
                              <i aria-hidden="true" class="icon-services"></i>
                           </span>
                           <span>Services</span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <span class="icon">
                              <i aria-hidden="true" class="icon-portfolio"></i>
                           </span>
                           <span>Portfolio</span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <span class="icon">
                              <i aria-hidden="true" class="icon-blog"></i>
                           </span>
                           <span>Blog</span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <span class="icon">
                              <i aria-hidden="true" class="icon-team"></i>
                           </span>
                           <span>The team</span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <span class="icon">
                              <i aria-hidden="true" class="icon-contact"></i>
                           </span>
                           <span>Contact</span>
                        </a>
                     </li>
                  </ul>
               </nav>
            </div>
         <!-- </div> -->
      </header>

      <div class="container">

         <div id="logo">

            <!-- <figure>
              <img src="images/logo.png" alt="PartyPix" />
            </figure> -->
            <h1>Connexion</h1>
            </div>

            <div id="login">

               <form name="form_test" action="javascript:void(0);" method="get">

                  <fieldset class="clearfix">

                     <p><span id="icon" class="fontawesome-user"></span><input id="user" type="text" value="Utilisateur" onBlur="if(this.value == '') this.value = 'Utilisateur'; check('user');" onFocus="if(this.value == 'Utilisateur') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
                     <p><span id="icon2" class="fontawesome-lock"></span><input id="password" type="password"  value="Mot de passe" onBlur="if(this.value == '') this.value = 'Mot de passe'; check('lock');" onFocus="if(this.value == 'Mot de passe') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
                     <p><input type="submit" value="Connexion"></p>

                  </fieldset>

               </form>

               <p>
                  Pas encore membre ?<br>
                  <a href="#">S'inscrire dès maintenant<span class="fontawesome-arrow-right"></span></a>
               </p>

            </div> <!-- end login -->

      </div>
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

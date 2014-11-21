<!DOCTYPE html>

<html lang="fr-FR">

   <head>

      <meta charset="utf-8">

      <title>PartyPix - Login</title>

      <link rel="stylesheet" href="css/styles.css">
      <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">
      <link rel="icon" type="image/png" href="favicon.png" />
      <script src="js/functions.js"></script>
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
        <nav role='navigation'>
          <ul>
            <li><a class="link-1 entypo-home active" href="index.php"></a></li>
             <li><a class="link-2 entypo-picture" href="#"></a></li>
            <li><a class="link-3 entypo-user" href="#"></a></li>
            <li><a class="link-4 entypo-search" href="#"></a></li>
          </ul>
        </nav>
      </header>

      <div class="container">

         <div id="logo">

            <figure>
              <img src="images/logo.png" alt="PartyPix" />
            </figure>
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

   </body>

</html>

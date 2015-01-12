²<!DOCTYPE html>

<html lang="fr" class="no-js">

   <head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>PartyPix - Accueil</title>

      <link rel="icon" type="image/png" href="favicon.png" />
      <link rel="stylesheet" type="text/css" href="css/normalize.css" />
      <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
      <link rel="stylesheet" type="text/css" href="css/bottom-area.css" />
      <link rel="stylesheet" type="text/css" href="css/styles.css" />
      <link rel="stylesheet" type="text/css" href="css/default.css" />
      <link rel="stylesheet" type="text/css" href="css/component.css" />
      <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">

      <script src="js/functions.js"></script>
      <script src="js/modernizr.custom.js"></script>

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

      <div class="container-image">

         <div class="content">

            <div id="grid" class="grid clearfix">
               <div class="grid__item"><i class="fa fa-fw fa-image"></i></div>
               <div class="grid__item"><i class="fa fa-fw fa-image"></i></div>
               <div class="grid__item"><i class="fa fa-fw fa-image"></i></div>
               <div class="grid__item"><i class="fa fa-fw fa-image"></i></div>
               <div class="grid__item"><i class="fa fa-fw fa-image"></i></div>
               <div class="grid__item"><i class="fa fa-fw fa-image"></i></div>
               <div class="grid__item"><i class="fa fa-fw fa-image"></i></div>
               <div class="grid__item"><i class="fa fa-fw fa-image"></i></div>
               <div class="grid__item"><i class="fa fa-fw fa-image"></i></div>
               <div class="grid__item"><i class="fa fa-fw fa-image"></i></div>
               <div class="grid__item"><i class="fa fa-fw fa-image"></i></div>
               <div class="grid__item"><i class="fa fa-fw fa-image"></i></div>
            </div>
            <!-- Related demos -->
            <!-- <section class="related">
               <p>If you enjoyed this demo you might also like:</p>
               <a href="http://tympanus.net/Development/DraggableDualViewSlideshow/">
                  <img src="img/related/DualViewSlideshow.png" alt="Dual-View Slideshow Image"/>
                  <h3>Draggable Dual-View Slideshow</h3>
               </a>
               <a href="http://tympanus.net/Development/ButtonComponentMorph/">
                  <img src="img/related/MorphingButtons.png" alt="Morphing Buttons Image" />
                  <h3>Morphing Buttons Concept</h3>
               </a>
            </section> -->
         </div><!-- /content -->
      </div><!-- /container -->

      <div id="drop-area" class="drop-area">
         <div>
            <div class="drop-area__item"><div class="dummy"></div></div>
            <div class="drop-area__item"><div class="dummy"></div></div>
            <div class="drop-area__item"><div class="dummy"></div></div>
            <div class="drop-area__item"><div class="dummy"></div></div>
         </div>
      </div>

      <div class="drop-overlay"></div>
      <script src="js/draggabilly.pkgd.min.js"></script>
      <script src="js/dragdrop.js"></script>
      <script>
         (function() {
            var body = document.body,
            dropArea = document.getElementById( 'drop-area' ),
            droppableArr = [], dropAreaTimeout;

            // initialize droppables
            [].slice.call( document.querySelectorAll( '#drop-area .drop-area__item' )).forEach( function( el ) {
               droppableArr.push( new Droppable( el, {
                  onDrop : function( instance, draggableEl ) {
                     // show checkmark inside the droppabe element
                     classie.add( instance.el, 'drop-feedback' );
                     clearTimeout( instance.checkmarkTimeout );
                     instance.checkmarkTimeout = setTimeout( function() {
                        classie.remove( instance.el, 'drop-feedback' );
                     }, 800 );
                     // ...
                  }
               } ) );
            } );

            // initialize draggable(s)
            [].slice.call(document.querySelectorAll( '#grid .grid__item' )).forEach( function( el ) {
               new Draggable( el, droppableArr, {
                  draggabilly : { containment: document.body },
                  onStart : function() {
                     // add class 'drag-active' to body
                     classie.add( body, 'drag-active' );
                     // clear timeout: dropAreaTimeout (toggle drop area)
                     clearTimeout( dropAreaTimeout );
                     // show dropArea
                     classie.add( dropArea, 'show' );
                  },
                  onEnd : function( wasDropped ) {
                     var afterDropFn = function() {
                        // hide dropArea
                        classie.remove( dropArea, 'show' );
                        // remove class 'drag-active' from body
                        classie.remove( body, 'drag-active' );
                     };

                     if( !wasDropped ) {
                        afterDropFn();
                     }
                     else {
                        // after some time hide drop area and remove class 'drag-active' from body
                        clearTimeout( dropAreaTimeout );
                        dropAreaTimeout = setTimeout( afterDropFn, 400 );
                     }
                  }
               } );
            } );
         })();
      </script>

      <!-- Script Menu -->
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

<!DOCTYPE html>

<html lang="fr-FR" class="no-js">

   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>PartyPix - Accueil</title>

      <link rel="icon" type="image/png" href="favicon.png" />
      <link rel="stylesheet" type="text/css" href="css/normalize.css" />
      <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
      <link rel="stylesheet" type="text/css" href="css/bottom-area.css" />
      <link rel="stylesheet" type="text/css" href="css/styles.css" />
      <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">

      <script src="js/modernizr.custom.js"></script>
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
   </body>
   
</html>

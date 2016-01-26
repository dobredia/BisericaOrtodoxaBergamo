<!DOCTYPE html>
<!--
    This page is using the project "Scattered Polaroids Gallery" from Codrops.
    
    Please find the project at link:
    http://tympanus.net/codrops/2014/01/28/scattered-polaroids-gallery/
    
    Please find the license of the project:
################################################################################################################################################
    Licensing & Terms of Use
    The resources on Codrops can be used freely in personal and commercial projects. 
    Please note, that most of the tutorials and resources are experimental and not 
    ready for production, but made for inspiration and demonstration purpose only. 
    The resources on Codrops can be used in websites, web apps and web templates intended for sale. 
    You don’t have to link back to us if it vitiates your work but we appreciate any credit. 
    You are not allowed to take our work “as-is” and sell it, redistribute or re-publish it, 
    or sell “pluginized” versions of it. If you plan to create free 
    WordPress, jQuery, Joomla, etc. plugins out of our scripts, please credit us in a fair way 
    and link to the respective article on Codrops. 
    Please, respect the licenses of the resources (audio, video or images) that we often use in our demos. 
    We always indicate the license in the article and link to the owner/creator in both, article and demo. 
    If you write about some of our work we would like you to add a link back to us. 
    You are free to copy excerpts but please do not copy entire articles (e.g. RSS feed scraping), 
    we put our heart into this work. Don’t re-publish our demos and our ZIP files, 
    and don’t link directly to any ZIP file, link to the article instead. Please contact us, 
    if you’d like to translate articles and re-publish them. Summarized, use it freely, 
    integrate it, make it your own, but don’t copy and paste our work and sell it or claim that it’s yours, stay fair. 
    Thank you for visiting Codrops, we hope you enjoy our work and find it useful!
################################################################################################################################################
-->
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>Scattered Polaroids Gallery</title>
        <meta name="description" content="Scattered Polaroids Gallery: A flat-style take on a Polaroid gallery" />
        <meta name="keywords" content="scattered polaroids, image gallery, javascript, random rotation, 3d, backface, flat design" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        <link rel="stylesheet" type="text/css" href="css/myCss.css" />
        <script src="js/modernizr.min.js"></script>
        <script src="../js/jquery-2.1.4.min.js"></script>
        <script src="js/myJs.js"></script>
    </head>
    <body>
        <section id="photostack-1" class="photostack">
            <div>
<?php
    function scatteredPhoto($photo) {
        print   "<figure>".
                "   <a href='$photo->href' class='photostack-img'>".
                "       <img src='$photo->img'/>".
                "   </a>".
                "   <figcaption>".
                "       <h2 class='photostack-title'>$photo->title</h2>".
                "       <div class='photostack-back'>".
                "           <p>$photo->back</p>".
                "       </div>".
                "   </figcaption>".
                "</figure>";    
    }
    foreach (simplexml_load_file('photosData.xml') as $photo) {
        scatteredPhoto($photo);
    }
?>
            </div>
        </section>
        <script src="js/classie.js"></script>
        <script src="js/photostack.js"></script>
        <script>
            // [].slice.call( document.querySelectorAll( '.photostack' ) ).forEach( function( el ) { new Photostack( el ); } );

            new Photostack(document.getElementById('photostack-1'), {
                callback: function(item) {
                    //console.log(item)
                }
            });
            new Photostack(document.getElementById('photostack-2'), {
                callback: function(item) {
                    //console.log(item)
                }
            });
            new Photostack(document.getElementById('photostack-3'), {
                callback: function(item) {
                    //console.log(item)
                }
            });
        </script>
    </body>
</html>
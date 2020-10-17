<?php
/*
Plugin Name: Custom GA
Plugin URI: https://github.com/joaopereirawd/custom-ga
Description: Add the Google Analytics tracking code to your site.
Author: João Pereira
Version: 1.0
*/

 function customGA() { ?>
  <script async src="https://www.googletagmanager.com/gtag/js?id=YOUR_GA_CODE"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'YOUR_GA_CODE');
  </script>
  <?php
}
  
add_action( 'wp_footer', 'customGA', 10 );
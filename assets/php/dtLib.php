<?php
  /*
   * Dylan Tackoor
   * 11/12/2016
   *
   * Consists of functions written/appropriated
   * by Dylan to assist in his web development.
   *
   */

  // TODO determine if something like this is useful
  function renderPage($title, $css, $SEOdescription, $SEOkeywords) {
    require 'assets/views/partials/_head.php';
    require 'assets/views/partials/_navbar.php';

    require 'assets/views/' . $css . '.php';

    require 'assets/views/partials/_footer.php';
    require 'assets/views/partials/_scripts.php';
  }

  // TODO Fade website 10% every day late on payment

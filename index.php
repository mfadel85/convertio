<?php
  //require_once 'vendor/convertio/convertio-php/autoload.php';                      // Comment this line if you use Composer to install the package
  require_once 'vendor/autoload.php'; // Comment this line if you use Composer to install the package

  use \Convertio\Convertio;

  print_r("Tests tart<br>");
  $API = new Convertio("5ab2ae81164df0a7b4a4e15d2c14dcf6");           // You can obtain API Key here: https://convertio.co/api/

  $API->start('download.png', 'svg')   // Convert  PNG to SVG
  ->wait()                                          // Wait for conversion finish
  ->download('./googleosss.svg')                        // Download Result To Local File
  ->delete();                                       // delete from server
  print_r("Test ends<br>");


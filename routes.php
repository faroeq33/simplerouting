<?php

use Pecee\SimpleRouter\SimpleRouter;

$rootFolder = $_ENV['ROOTFOLDER'];

SimpleRouter::get($rootFolder, function () {
  return 'Hello world';
});

SimpleRouter::get($rootFolder . '/contact', function () {
  return 'contact';
});

SimpleRouter::get($rootFolder . '/homepagina', function () {
  include "homepagina.php";
});

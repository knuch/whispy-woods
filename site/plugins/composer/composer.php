<?php
// composer autoload
require_once kirby()->roots()->index().DS.'vendor'.DS.'autoload.php';

// Register Kirby twig plugin
Kirby\Twig\Plugin::register();

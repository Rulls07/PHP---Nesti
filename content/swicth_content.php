<?php
$text = '';
$loc = filter_input(INPUT_GET, "loc");
switch ($loc) {

    case  'home':

        $text = ("content/index_content.php");

        break;

    case  'about':

        $text = ("content/about_content.php");

        break;
    case  'products':

        $text = ("content/product_content.php");

        break;
    case  'realisations':

        $text = ("content/realisation_content.php");

        break;
    case  'store':

        $text = ("content/store_content.php");

        break;
    default:
        $text = ("content/404.php");
        break;
};

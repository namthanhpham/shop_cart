<?php
session_start();
ob_start();

require 'data/pages.php';
require 'data/products.php';

require 'lib/template.php';
require 'lib/show_data.php';
require 'lib/number.php';
require 'lib/url.php';
require 'lib/pages.php';
require 'lib/products.php';
require 'lib/cart.php';
?>


<?php
$mod = !empty($_GET['mod']) ? $_GET['mod'] : 'home';
$act = !empty($_GET['act']) ? $_GET['act'] : 'main';
$path = "module/{$mod}/{$act}.php";
// echo $path;

if (file_exists($path)) {
    require $path;
} else {
    require  'inc/404.php';
}
?>

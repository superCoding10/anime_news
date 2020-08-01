<?php 
spl_autoload_register(function($name) {
    include_once $name.".php";
});

use Api\Cache\className;
// echo __NAMESPACE__;
new className;

?>
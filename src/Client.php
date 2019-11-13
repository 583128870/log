<?php
namespace Test;

class Client {

   static function run ($type='File'){
    $class = "Test\log\\".$type;
    $container = new $class();
    return $container->run();
   }
}
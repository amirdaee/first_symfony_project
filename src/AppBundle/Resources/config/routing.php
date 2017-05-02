<?php
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();
$collection->add('amir', new Route('/amir', array(
    '_controller' => 'AppBundle:Amir:amir',
)));

return $collection;
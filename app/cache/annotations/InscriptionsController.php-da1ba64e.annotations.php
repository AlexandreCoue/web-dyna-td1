<?php

return array(
  '#namespace' => 'controllers',
  '#uses' => array (
),
  '#traitMethodOverrides' => array (
  'controllers\\InscriptionsController' => 
  array (
  ),
),
  'controllers\\InscriptionsController::index' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "/_default/","name"=>"index")
  ),
  'controllers\\InscriptionsController::inscription' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "inscription","methods"=>["get"],"name"=>"inscription")
  ),
  'controllers\\InscriptionsController::logout' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "/logout/","methods"=>["get"],"name"=>"logout")
  ),
  'controllers\\InscriptionsController::inscriptionList' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "inscriptions","methods"=>["get"],"name"=>"inscriptions")
  ),
  'controllers\\InscriptionsController::validateInscription' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "do/inscription","methods"=>["get"],"name"=>"do.inscription")
  ),
);


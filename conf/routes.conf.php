<?php 
/* 
  'key' => 'value'
  The default route is the route that the user will be redirected after login|register 
  <!> The value of 'default' is the KEY of the default controller, not the value directly 
  In in this example, the default route is equal to the home route (so will call home's controller)
*/
return array(
  'default' => 'home',
  'home' => 'index'
);

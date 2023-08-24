<?php
$databases['default']['default'] = array (
  'database' =>  $_SERVER['MYSQL_DATABASE'],
  'username' =>  $_SERVER['MYSQL_USER'],
  'password' =>  $_SERVER['MYSQL_PASSWORD'],
  'host' => $_SERVER['MYSQL_HOST'],
  'port' => $_SERVER['MYSQL_PORT'],
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);


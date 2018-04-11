<?php

$route['dashboard'] = 'dashboard/Dashboard';
$route['fetchurl'] = 'dashboard/Dashboard/fetchurl';
$route['getposts'] = 'dashboard/Dashboard/getposts';
$route['social_login'] = 'HAuth';
$route['login/(:any)'] = 'HAuth/login/$1';
$route['feeds'] = 'login/Login';
$route['voteforpost'] = 'dashboard/Dashboard/voteforpost';

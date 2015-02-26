<?php
/**
 * @file availability_search.php
 * @project gueststream sdk
 * @author Josh Houghtelin <josh@findsomehelp.com>
 * @created 2/18/15 12:49 PM
 */

require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/api_key.php';

$vrp = new \Gueststream\Vrp($api_key);

$search['arrival'] = "04/18/2015";
$search['departure'] = "04/25/2015";
$search['Adults'] = 2;
$search['limit'] = 1;
//$search['namelike'] = "Renaissance 4BR Deluxe";

$results = $vrp->search($search);
print_r($results);
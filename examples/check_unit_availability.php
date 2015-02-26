<?php
/**
 * This doesn't work yet
 *
 * @file check_unit_availability.php
 * @project gueststream sdk
 * @author Josh Houghtelin <josh@findsomehelp.com>
 * @created 12/23/14 2:31 PM
 */

require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/api_key.php';

$vrp = new \Gueststream\Vrp($api_key);
$result = $vrp->checkAvailability();
print_r($result);
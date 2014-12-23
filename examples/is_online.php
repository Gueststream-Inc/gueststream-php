<?php
/**
 * Created by PhpStorm.
 * User: Josh Houghtelin <josh@findsomehelp.com>
 * Date: 12/19/14
 * Time: 6:08 PM
 */

require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/api_key.php';

$vrp = new \Gueststream\Vrp($api_key);

print_r($vrp->isOnline());
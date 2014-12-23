<?php
/**
 * @file list_all_units.php
 * @project gueststream sdk
 * @author Josh Houghtelin <josh@findsomehelp.com>
 * @created 12/23/14 2:36 PM
 */

require __DIR__ . '/../vendor/autoload.php';
require __DIR__.'/api_key.php';

$vrp = new \Gueststream\Vrp( $api_key );
$search = $vrp->search();
foreach($search['results'] as $a_unit) {
    echo "<li>" . $a_unit['Name'] . "</li>";
}
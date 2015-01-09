<?php
/**
 * @file save_inquiry.php
 * @project gueststream sdk
 * @author Josh Houghtelin <josh@findsomehelp.com>
 * @created 12/31/14 12:50 PM
 */

require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/api_key.php';

$vrp = new \Gueststream\Vrp( $api_key );

$inquiry = new \Gueststream\Inquiry;
$inquiry->setUnitID(653);
$inquiry->setArrivalDate('2015/03/21');
$inquiry->setNights(5);
$inquiry->setGuestName('Josh Houghtelin');
$inquiry->setGuestEmail('josh@gueststream.com');
$inquiry->setGuestComments('How fine is the sand on the beach?');
$inquiry->setGuestPhone('7194225010');

$vrp->saveInquiry($inquiry);
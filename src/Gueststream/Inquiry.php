<?php
/**
 * @file Inquiry.php
 * @project gueststream sdk
 * @author Josh Houghtelin <josh@findsomehelp.com>
 * @created 12/31/14 12:26 PM
 */

namespace Gueststream;


class Inquiry
{
    public $unit_id;
    public $name;
    public $email;
    public $checkin;
    public $nights;
    public $comments;
    public $phone;

    public function setUnitID( $unit_id )
    {
        $this->unit_id = $unit_id;
    }

    public function setArrivalDate( $arrival_date )
    {
        $this->checkin = $arrival_date;
    }

    public function setNights( $nights )
    {
        $this->nights = $nights;
    }

    public function setGuestName( $guest_name )
    {
        $this->name = $guest_name;
    }

    public function setGuestEmail( $guest_email )
    {
        $this->email = $guest_email;
    }

    public function setGuestComments( $comments )
    {
        $this->comments = $comments;
    }

    public function setGuestPhone( $phone )
    {
        $this->phone = $phone;
    }
}
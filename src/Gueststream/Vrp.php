<?php
/**
 * Created by PhpStorm.
 * User: Josh Houghtelin <josh@findsomehelp.com>
 * Date: 12/19/14
 * Time: 6:02 PM
 */

namespace Gueststream;

class Vrp
{
    protected $client = null;

    public function __construct( $key, $client = null )
    {
        $this->client = ( is_null( $client ) ) ? new \Gueststream\Client( $key ) : $client;
    }

    public function isOnline()
    {
        $result = $this->client->get( 'testapi' );
        if ($result['Status'] == "Online") {
            return true;
        }

        return false;
    }

    public function search( $params = [ ] )
    {
        $obj = new \stdClass();

        foreach($params as $key => $a_param) {
            $obj->$key = $a_param;
        }

        if(!isset($obj->page)){
            $obj->page = 1;
        }

        if(!isset($obj->limit)) {
            $obj->limit = 1000;
        }

        if(!isset($obj->arrival)) {
            $obj->showall = 1;
        }

        $result = $this->client->post( 'search', [ 'search' => json_encode($obj) ] );
        if($result) {
            return $this->client->detail;
        }

        return false;
    }

    public function getUnit( $unit_slug )
    {
        $data = $this->client->get( "getunit/" . $unit_slug );
        print_r( $data );
    }

    public function getComplex( $complex )
    {

    }
}
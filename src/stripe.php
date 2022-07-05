<?php
namespace Lymos\Stripe;

use Lymos\Stripe\api\charge;

class stripe{

    public function key(){

    }

    public function charge(){
        $charge = new charge;
        $charge->chargeSend();
    }
}
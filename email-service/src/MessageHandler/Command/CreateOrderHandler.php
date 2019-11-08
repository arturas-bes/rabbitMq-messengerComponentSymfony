<?php

namespace App\MessageHandler\Command;

use App\Message\Command\CreateOrder;

class  CreateOrderHandler {

    public function __invoke(CreateOrder $createOrder)
    {
        // TODO: Implement __invoke() method.

        //send an email to client confirming the order (prodcut name amount price .....)
        // update warehouse database
        sleep(4);
        var_dump($createOrder);
    }
}
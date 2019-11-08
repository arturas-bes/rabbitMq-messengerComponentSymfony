<?php

namespace App\MessageHandler\Command;

use App\Message\Command\CreateOrder;
use App\Message\Command\SignUpSms;

class  SignUpSmsHandler {

    public function __invoke(SignUpSms $signUpSms)
    {
        // TODO: Implement __invoke() method.

        //connect to api of external sms service provider

        sleep(2);
        var_dump($signUpSms);
    }
}
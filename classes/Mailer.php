<?php

namespace Classes;

use Exception;

class Mailer
{
    public function send($email = null, $message)
    {

        if(!$email) {
            throw new Exception("Email does not exists.");
        }

        sleep(3);

        echo "send $email to $message.";

        return true;
    }
}

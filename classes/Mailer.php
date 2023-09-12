<?php

namespace Classes;

class Mailer
{
    public function send($email, $message)
    {
        sleep(3);

        echo "send $email to $message.";

        return true;
    }
}

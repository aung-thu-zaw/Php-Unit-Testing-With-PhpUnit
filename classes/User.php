<?php

namespace Classes;

class User
{
    protected $mailer;

    public function __construct(protected $name = "", protected $email = null)
    {

    }


    public function getName()
    {
        return $this->name;
    }

    public function setMailer(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function notify($message)
    {
        $this->mailer->send($this->email, $message);

        return true;
    }
}

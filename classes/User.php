<?php

namespace Classes;

class User
{
    public function __construct(protected $name="")
    {

    }


    public function getName()
    {
        return $this->name;
    }
}

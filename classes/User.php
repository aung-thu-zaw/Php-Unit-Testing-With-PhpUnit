<?php

namespace classes;

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

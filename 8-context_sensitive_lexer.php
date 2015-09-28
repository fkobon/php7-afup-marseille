<?php

class Afup
{
    public function list()
    {
        return [1, 2];
    }

    public function return()
    {
    }
}

var_dump((new Afup)->list());

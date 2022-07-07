<?php

namespace Model\Table;

class TableDb
{
    protected $connect;

    public function __construct($connect)
    {
        $this->connect = $connect;
    }

}
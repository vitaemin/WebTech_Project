<?php

namespace  Model\Report;

class ReportDb
{
    protected $connect;

    public function  __construct($connect)
    {
        $this->connect = $connect;
    }

}
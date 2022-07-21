<?php

namespace Model\Bill;

class Bill{
    protected $bill_id;
    protected $event_id;
    protected $date;
    protected $total;
    protected $status;

    public function __construct()
    {
    }
}
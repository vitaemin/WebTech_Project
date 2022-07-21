<?php

namespace Model\Bill;

class Bill{
    protected $bill_id;
    protected $discount_rate;
    protected $time_create;
    protected $total;
    protected $status;

    public function __construct()
    {
    }
}
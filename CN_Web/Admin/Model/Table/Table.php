<?php

namespace Model\Table;

class Table{
    protected $table_id;
    protected $bill_id;
    protected $number;
    protected $status;
    protected $customer_name;
    protected $phone;
    protected $number_people;
    protected $time_reserve;

    public function __construct()
    {
    }
}
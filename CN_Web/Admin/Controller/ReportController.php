<?php

namespace Controller;

use Model\Database\DBConnect;
use Model\Report\ReportDb;

class ReportController
{
    protected $reportDb;
    protected $allBill;
    public function __construct()
    {
        $db = new DBConnect();
        $this->reportDb = new ReportDb($db->connect());
        $this->allBill = $this->reportDb->getAllBill();
    }

    public function renderReport()
    {
        include_once './View/Report.phtml';
    }

    public function getTotalBillByMonth ($month){
        $total = 0;
        foreach ($this->allBill as $key => $bill){
            if(date('m', strtotime($bill['time_create'])) == $month){
                $total += $bill['total'];
            }
        }
        return (float)$total/1000000;
    }

    public function getTotalBillByWeek ($weekday){
        $total = 0;
        $currentDate = date('y-m-d');
        foreach ($this->allBill as $key => $bill){
            if( date("W", strtotime($bill['time_create'])) == date("W", strtotime($currentDate))) {
                if (date('w', strtotime($bill['time_create'])) == $weekday) {
                    $total += $bill['total'];
                }
            }
        }
        return $total/1000;
    }

    public function getTotalBillCurrentDay (){
        $total = 0;
        $currentDate = date('y-m-d');
        foreach ($this->allBill as $key => $bill){
            if (date('z', strtotime($bill['time_create'])) == date('z', strtotime($currentDate))) {
                $total += $bill['total'];
            }
        }
        return $total/1000;
    }
    public function getTotalBillCurrentWeek (){
        $total = 0;
        $currentDate = date('y-m-d');
        foreach ($this->allBill as $key => $bill){
            if (date('W', strtotime($bill['time_create'])) == date('W', strtotime($currentDate))) {
                $total += $bill['total'];
            }
        }
        return $total/1000000;
    }
    public function getTotalBillCurrentMonth (){
        $total = 0;
        $currentDate = date('y-m-d');
        foreach ($this->allBill as $key => $bill){
            if (date('m', strtotime($bill['time_create'])) == date('m', strtotime($currentDate))) {
                $total += $bill['total'];
            }
        }
        return $total/1000000;
    }

    public function getTotalAllBill(){
        $total = 0;
        foreach ($this->allBill as $key => $bill){
            $total += $bill['total'];
        }
        return $total/1000000;
    }


}
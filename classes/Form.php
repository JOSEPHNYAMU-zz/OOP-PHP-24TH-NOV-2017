<?php

class Form
{
    function __construct()
    {
        //Form Inputs
        if(isset($_POST['show'])){
            $name = $_POST['names'];
            $location = $_POST['location'];
            $bank = $_POST['bank'];
            $amount = $_POST['amount'];
            $times = $_POST['times'];

            if($bank == 'Equity'){
                $interest = 0.1;
            }else if ($bank == 'KCB'){
                $interest = 0.6;
            }else if($bank = 'Standard Chartered'){
                $interest = 0.9;
            }else{

                $interest = 0.12;
            }
            $total = ($amount*$interest*$times);
            $allAmount = $total + $amount;
        }
    }
}
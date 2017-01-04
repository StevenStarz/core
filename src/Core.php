<?php

namespace Stevens\Core;

class Core
{
    public static function getPayment()
    {
	  	$payment = config('config.payment');
        return $payment::getCounter();
    }

    public static function getSchedule()
    {
	  	$schedule = config('config.schedule');
        return $schedule::getCounter();
    }
}

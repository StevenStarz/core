<?php

namespace Stevens\Core;

class Core
{
    public static function getPayment()
    {
	  	$payment = config('core_config.payment');
        return $payment::getCounter();
    }

    public static function getSchedule()
    {
	  	$schedule = config('core_config.schedule');
        return $schedule::getCounter();
    }
}

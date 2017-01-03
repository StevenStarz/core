<?php

use Core\Core;
use Payment\BasePayment;
use Schedule\BaseSchedule;

require '../../vendor/autoload.php';

echo Core::getCounter();
echo BasePayment::getCounter();
echo BaseSchedule::getCounter();

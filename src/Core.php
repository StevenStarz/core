<?php

namespace Stevens;

class Core
{
    protected static $counter = 0;

    public static function getCounter()
    {
        return static::$counter;
    }
}

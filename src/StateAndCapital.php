<?php

namespace Busayo;

class StateAndCapital
{
    public static $cities = ['Lagos' => 'Ikeja', 'Kano' => 'Kano'];

    public static function all()
    {
        return static::$cities;
    }

    public static function getCity($state)
    {
        return static::$cities[$state];
    }
}
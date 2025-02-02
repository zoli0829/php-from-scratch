<?php

class StringUtility
{
    public static function shout($string)
    {
        return strtoupper($string . "!!! \n");
    }

    public static function whisper($string)
    {
        return strtolower($string . ".\n");
    }

    public static function repeat($string, $times = 2)
    {
        return str_repeat($string, $times);
    }
}

echo StringUtility::shout("Hello");
echo StringUtility::whisper("Hello");
echo StringUtility::repeat("Bonjour, ", 5);

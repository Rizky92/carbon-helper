<?php

use Carbon\Carbon;
use Carbon\CarbonImmutable;

if (! function_exists('carbon')) {
    /**
     * @param string|DateTimeInterface|null $time
     * @param DateTimeZone|string|null $tz
     *
     * @throws \Carbon\Exceptions\InvalidFormatException
     *
     * @return \Carbon\Carbon
     * 
     * @see \Carbon\Carbon::parse()
     */
    function carbon($time = null, $tz = null)
    {
        return Carbon::parse($time, $tz);
    }
}

if (! function_exists('carbon_immutable')) {
    /**
     * @param string|DateTimeInterface|null $time
     * @param DateTimeZone|string|null $tz
     *
     * @throws \Carbon\Exceptions\InvalidFormatException
     *
     * @return \Carbon\Carbon
     * 
     * @see \Carbon\CarbonImmutable::parse()
     */
    function carbon_immutable($time = null, $tz = null)
    {
        return CarbonImmutable::parse($time, $tz);
    }
}
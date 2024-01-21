<?php

use Carbon\Carbon;
use Carbon\CarbonImmutable;

if (! function_exists('carbon')) {
    /**
     * @see \Carbon\Carbon
     *
     * @param  \DateTimeInterface|string|null  $time
     * @param  \DateTimeZone|string|null  $tz
     *
     * @return \Carbon\Carbon
     *
     * @throws \Carbon\Exceptions\InvalidFormatException
     */
    function carbon($time = null, $tz = null)
    {
        return Carbon::parse($time, $tz);
    }
}

if (! function_exists('carbon_immutable')) {
    /**
     * @see \Carbon\CarbonImmutable
     *
     * @param  \DateTimeInterface|string|null  $time
     * @param  \DateTimeZone|string|null  $tz
     *
     * @return \Carbon\CarbonImmutable
     *
     * @throws \Carbon\Exceptions\InvalidFormatException
     */
    function carbon_immutable($time = null, $tz = null)
    {
        return CarbonImmutable::parse($time, $tz);
    }
}

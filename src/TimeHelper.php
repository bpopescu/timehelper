<?php
namespace bpopescu\TimeHelper;


class TimeHelper
{
    const ONE_MINUTE = 60;
    const TWO_MINUTES = 120;
    const THREE_MINUTES = 180;
    const FIVE_MINUTES = 300;

    const ONE_HOUR = 3600;
    const TWO_HOURS = 7200;
    const THREE_HOURS = 10800;
    const FIVE_HOURS = 18000;

    const ONE_DAY = 86400;
    const TWO_DAYS = 172800;
    const THREE_DAYS = 259200;
    const FIVE_DAYS = 432000;

    const ONE_WEEK = 604800;
    const TWO_WEEKS = 1209600;
    const THREE_WEEKS = 1814400;
    const FIVE_WEEKS = 3024000;

    /**
     * @param int $seconds
     * @return float|int
     */
    static function toMinutes(int $seconds)
    {
        return $seconds / self::ONE_MINUTE;
    }

    /**
     * @param int $seconds
     * @return float|int
     */
    static function toHours(int $seconds)
    {
        return $seconds / self::ONE_HOUR;
    }

    /**
     * @param int $seconds
     * @return float|int
     */
    static function toDays(int $seconds)
    {
        return $seconds / self::ONE_DAY;
    }

    /**
     * @param int $seconds
     * @return float|int
     */
    static function toWeeks(int $seconds)
    {
        return $seconds / self::ONE_WEEK;
    }

}
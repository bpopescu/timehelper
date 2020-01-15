<?php

namespace bpopescu\TimeHelper\Tests;

use bpopescu\TimeHelper\TimeHelper;
use PHPUnit\Framework\TestCase;

class TimeHelperTest extends TestCase
{

    /**
     * @dataProvider timeHelperDataProvider
     * @param int $seconds
     * @param float $returnMinutes
     * @param float $returnHours
     * @param float $returnDays
     * @param float $returnWeeks
     */
    public function testToHours(int $seconds, float $returnMinutes, float $returnHours, float $returnDays, float $returnWeeks)
    {
        $this->assertEquals($returnMinutes, TimeHelper::toMinutes($seconds));
        $this->assertEquals($returnHours, TimeHelper::toHours($seconds));
        $this->assertEquals($returnDays, TimeHelper::toDays($seconds));
        $this->assertEquals($returnWeeks, TimeHelper::toWeeks($seconds));
    }

    public function timeHelperDataProvider()
    {
        return [
            [1, 0.016666666666667, 0.00027777777777778, 1.1574074074074073E-5, 1.6534391534392E-6],
            [1234567890, 20576131.5, 342935.525, 14288.980208333332, 2041.2828869048],
            [TimeHelper::ONE_WEEK, 10080, 168, 7, 1],
            [TimeHelper::TWO_WEEKS, 20160, 336, 14, 2],
            [TimeHelper::THREE_WEEKS, 30240, 504, 21, 3],
            [TimeHelper::FIVE_WEEKS, 50400, 840, 35, 5],
            [TimeHelper::ONE_DAY, 1440, 24, 1, 0.14285714285714],
            [TimeHelper::TWO_DAYS, 2880, 48, 2, 0.28571428571429],
            [TimeHelper::THREE_DAYS, 4320, 72, 3, 0.42857142857143],
            [TimeHelper::FIVE_DAYS, 7200, 120, 5, 0.71428571428571],
            [TimeHelper::ONE_HOUR, 60, 1, 0.041666666666667, 0.005952380952381],
            [TimeHelper::TWO_HOURS, 120, 2, 0.083333333333333, 0.011904761904762],
            [TimeHelper::THREE_HOURS, 180, 3, 0.125, 0.017857142857143],
            [TimeHelper::FIVE_HOURS, 300, 5, 0.20833333333333334, 0.029761904761905],
            [TimeHelper::ONE_MINUTE, 1, 0.016666666666667, 0.0006944444444444445, 9.9206349206349E-5],
            [TimeHelper::TWO_MINUTES, 2, 0.033333333333333, 0.0013888888888889, 0.0001984126984127],
            [TimeHelper::THREE_MINUTES, 3, 0.05, 0.0020833333333333333, 0.00029761904761904765],
            [TimeHelper::FIVE_MINUTES, 5, 0.083333333333333, 0.003472222222222222, 0.00049603174603175],
        ];
    }


}
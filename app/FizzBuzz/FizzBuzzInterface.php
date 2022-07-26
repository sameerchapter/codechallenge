<?php

namespace App\FizzBuzz;

interface FizzBuzzInterface
{
    /**
     * @param int $nr
     *
     * @return string
     */
    public static function getSpecific(int $nr): string;

    /**
     * @param int $start
     * @param int $end
     * @param int $step
     *
     * @return array
     */
    public static function getRange(int $start, int $end, int $step = 1): array;
}

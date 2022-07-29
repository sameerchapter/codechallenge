<?php

namespace App\FizzBuzz;

use App\FizzBuzz\FizzBuzzInterface;

/**
 * Class FizzBuzz
 * ToDo: implement the interface FizzBuzzInterface here
 * @package App\FizzBuzz
 */
class FizzBuzz implements FizzBuzzInterface
{   
    public static function getSpecific(int $nr): string
    { 
       // to check if a number is divible by 3 or not
        
        return self::getFizzBuzz($nr);
        
    }
    public static function getRange(int $start, int $end, int $step = 1): array
    {
        $numberArray = [];
        for ($i = $start; $i <= $end; $i += $step) 
            $numberArray[]=self::getFizzBuzz($i);
            
        return $numberArray;
    }

    public  static function getFizzBuzz(int $x)
    {
        if ($x % 3 == 0 && $x % 7 == 0) { 
            return "FizzBuzz";
        } elseif ($x % 3 == 0) {            
            return "Fizz";
        } elseif ($x % 7 == 0) {           
            return "Buzz";
        } else {
            return $x;                  
        }
    }
}

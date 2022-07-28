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
        
        $number = $nr;
        if ($number % 3 == 0 && $number % 7 == 0) { 
            return "FizzBuzz";
        } elseif ($number % 3 == 0) {            
            return "Fizz";
        } elseif ($number % 7 == 0) {           
            return "Buzz";
        } else {
            return $number;                  
        }
    }
    public static function getRange(int $start, int $end, int $step = 1): array
    {
        $numberArray = [];
        for ($i = $start; $i <= $end; $i += $step) {    
            if ($i % 3 == 0 && $i % 7 == 0) {
                $numberArray[] = "FizzBuzz";        
            } elseif ($i % 3 == 0) {
                $numberArray[] = "Fizz";
            } elseif ($i % 7 == 0) {
                $numberArray[] = "Buzz";
            } else {
                $numberArray[] = $i;
            }
        }
        return $numberArray;
    }
}

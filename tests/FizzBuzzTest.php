<?php

require_once "src/functions/fizzBuzz.php";

it('returns Fizz when the number is divisible by 3', function () {
    expect(fizzBuzz(3))->toBe('Fizz')
        ->and(fizzBuzz(6))->toBe('Fizz')
        ->and(fizzBuzz(9))->toBe('Fizz')
        ->and(fizzBuzz(12))->toBe('Fizz');
});

it('returns Buzz when the number is divisible by 5', function () {
    expect(fizzBuzz(5))->toBe('Buzz')
        ->and(fizzBuzz(10))->toBe('Buzz')
        ->and(fizzBuzz(20))->toBe('Buzz')
        ->and(fizzBuzz(25))->toBe('Buzz');
});

it('returns FizzBuzz when the number is divisible by both 3 and 5', function () {
    expect(fizzBuzz(15))->toBe('FizzBuzz')
        ->and(fizzBuzz(30))->toBe('FizzBuzz')
        ->and(fizzBuzz(45))->toBe('FizzBuzz')
        ->and(fizzBuzz(60))->toBe('FizzBuzz');
});

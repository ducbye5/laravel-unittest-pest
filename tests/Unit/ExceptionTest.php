<?php

use App\Http\Controllers\DemoController;
use PHPUnit\Framework\TestCase;

$demoController = new DemoController;

it('dividend is zero 1', function () use ($demoController) {
    $result = $demoController->division(1, 0);
})->throws(Exception::class, "Số bị chia phải lớn hơn 0");

// it('dividend is zero 2', function () use ($demoController){
//     $result = $demoController->division(1, 0);
// })->throws(Exception::class, "OKE");

it('dividend is zero 3', function () use ($demoController) {
    $result = $demoController->division(1, 0);
})->throws("Số bị chia phải lớn hơn 0");

it('dividend is zero 4', function () use ($demoController) {
    expect(fn() => $demoController->division(1, 0))->toThrow(Exception::class);
});

test('positive numbers', function () {
    $demoController = new DemoController();
    $result = $demoController->division(1, 2);

})->throwsNoExceptions();


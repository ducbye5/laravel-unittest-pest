<?php

use App\Http\Controllers\DemoController;
use PHPUnit\Framework\TestCase;

$demoController = new DemoController;

test('positive numbers', function () {
    $demoController = new DemoController();
    $result = $demoController->division(1, 2);

    expect($result)->toBe(0.5);
});

// test('positive numbers', function () {
//     $demoController = new DemoController();
//     $result = $demoController->division(1, 2);

//     expect($result)->toBe(0.5);
// });

it('negative numbers', function () {
    $demoController = new DemoController();
    $result = $demoController->division(-1, -2);

    expect($result)->toBe(0.5);
});

it('dividend is zero', function () use ($demoController) {
    $result = $demoController->division(1, 0);
})->throws(Exception::class, "Số bị chia phải lớn hơn 0");

class DemoControllerTest extends TestCase
{
    private $demoController;

    protected function setUp(): void
    {
        $this->demoController = new DemoController();
    }

    public function testDivisionFunctionWithPositiveNumbers()
    {
        $result = $this->demoController->division(1, 2);
    
        expect($result)->toBe(0.5);
    }
}

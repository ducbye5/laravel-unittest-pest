<?php

use App\Http\Controllers\DemoController;

$demoController = new DemoController;

describe('division', function () use ($demoController) {
    test('positive numbers', function () use ($demoController) {
        $result = $demoController->division(4, 2);
    
        expect($result)
            ->toBeInt()
            ->toBe(2)
            ->not->toBeString()
            ->not->toBe(1)
            ->toBeBetween(1, 3)
            ->toEqual(2);
    });

    it('negative numbers', function () use ($demoController) {
        $result = $demoController->division(-1, -2);
    
        expect($result)->toBe(0.5);
    });
})->group("DemoController_division");

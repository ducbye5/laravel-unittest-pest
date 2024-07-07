<?php

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\DemoController;

describe('division', function () {
    beforeEach(function () {
        $this->controller = new DemoController;
    });

    test('positive numbers', function () {
        $result = $this->controller->division(4, 2);
    
        expect($result)
            ->toBeInt()
            ->toBe(2);
    });

    it('negative numbers', function () {
        $result = $this->controller->division(-1, -2);
    
        expect($result)->toBe(0.5);
    });

    it('dividend is zero', function () {
        $result = $this->controller->division(1, 0);
    })->throws(Exception::class, "Số bị chia phải lớn hơn 0");
})->group("DemoController_division");

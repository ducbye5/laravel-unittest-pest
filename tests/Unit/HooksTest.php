<?php

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\DemoController;

beforeEach(function () {
    $this->demoController = new DemoController;
});

afterEach(function () {
    // $this->demoController->reset();
    // $this->tearDown();
});

beforeAll(function () {
    
});

afterAll(function () {
    
});
 
test('positive numbers', function () {
    $result = $this->demoController->division(4, 2);

    expect($result)
        ->toBeInt()
        ->toBe(2);
})->only();

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
})->group("DemoController_division");

it('negative numbers', function () {
    $result = $this->controller->division(-1, -2);

    expect($result)->toBe(0.5);
});

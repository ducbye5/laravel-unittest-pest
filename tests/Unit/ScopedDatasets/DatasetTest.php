<?php

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\DemoController;

describe('division', function () {
    beforeEach(function () {
        $this->controller = new DemoController;
    });

    // Scoped Datasets
    test('case correct data', function (int $divisor, int $dividend, $expectResult) {
        $result = $this->controller->division($divisor, $dividend);
    
        expect($result)->toBe($expectResult);
    })->with('datasets');
})->group("DemoController_division");


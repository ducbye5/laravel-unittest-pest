<?php

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\DemoController;

describe('division', function () {
    beforeEach(function () {
        $this->controller = new DemoController;
    });

    test('case correct data 1', function (int $divisor, int $dividend, $expectResult) {
        $result = $this->controller->division($divisor, $dividend);
    
        expect($result)->toBe($expectResult);
    })->with([
        'positive numbers' => [4, 2, 2],
        'negative numbers' => [-1, -2, 0.5],
        'using closure' => [fn () => 6, 2, 3]
    ]);

    test('case correct data 2', function (int $divisor, int $dividend, $expectResult) {
        $result = $this->controller->division($divisor, $dividend);
    
        expect($result)->toBe($expectResult);
    })->with('divisionDatasetInfile');

    // Sharing Datasets
    test('case correct data 3', function (int $divisor, int $dividend, $expectResult) {
        $result = $this->controller->division($divisor, $dividend);
    
        expect($result)->toBe($expectResult);
    })->with('divisionDataset');

    // Scoped Datasets
    test('case correct data 4', function (int $divisor, int $dividend, $expectResult) {
        $result = $this->controller->division($divisor, $dividend);
    
        expect($result)->toBe($expectResult);
    })->with('datasets');

    // use dataset in Dataset Folder
    test('case correct data 5', function (int $divisor, int $dividend, $expectResult) {
        $result = $this->controller->division($divisor, $dividend);
    
        expect($result)->toBe($expectResult);
    })->with('global_datasets');

    // repeat a test a given number of times
    test('case correct data 6', function (int $divisor, int $dividend, $expectResult) {
        $result = $this->controller->division($divisor, $dividend);
    
        expect($result)->toBe($expectResult);
    })->with('divisionDatasetInfile')->repeat(10);
})->group("DemoController_division");

dataset('divisionDatasetInfile', [
    'positive numbers' => [4, 2, 2],
    'negative numbers' => [-1, -2, 0.5],
    'using closure' => [fn () => 6, 2, 3]
]);

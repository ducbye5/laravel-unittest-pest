<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function division(int $divisor, int $dividend)
    {
        if ($dividend === 0) {
            throw new \Exception("Số bị chia phải lớn hơn 0");
        }

        return $divisor / $dividend;
    }
}

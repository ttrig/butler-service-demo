<?php

namespace App\Health;

use Butler\Health\Check;
use Butler\Health\Result;

class TeapotCheck extends Check
{
    public string $description = 'Teapot check';

    public function run(): Result
    {
        return Result::ok('I\'m a teapot.');
    }
}

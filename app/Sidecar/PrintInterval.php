<?php

namespace App\Sidecar;

use Hammerstone\Sidecar\LambdaFunction;
use Hammerstone\Sidecar\Runtime;

class PrintInterval extends LambdaFunction
{
    public function handler()
    {
        return 'resources/lambda/PrintInterval@handler';
    }

    public function package()
    {
        return [
            'resources/lambda/PrintInterval.py',
        ];
    }

    public function runtime()
    {
        return Runtime::PYTHON_39;
    }
}
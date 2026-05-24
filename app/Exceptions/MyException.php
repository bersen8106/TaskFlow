<?php

namespace App\Exceptions;

use Exception;

class MyException extends Exception
{
    public function context()
    {
        return [
            'custom_data' => 'This is some custom data for the exception',
        ];
    }

    public function render($request)
    {
        return response()->json([
            'message' => 'This is a custom exception',
        ], 500);
    }
}

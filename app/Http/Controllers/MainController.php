<?php

namespace App\Http\Controllers;

use App\Exceptions\MyException;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function testException()
    {
        throw new MyException();
    }
}

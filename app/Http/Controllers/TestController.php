<?php

namespace App\Http\Controllers;

use App\Events\TestEvent;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(Request $request)
    {
        $msg = $request->message;
        TestEvent::dispatch($msg);
    }
}

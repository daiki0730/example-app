<?php

namespace App\Http\Controllers\Sample;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * @return string
     */
    public function show()
    {
        return 'Hello';
    }

    /**
     * @param $id
     * @return string
     */
    public function showId($id)
    {
        return "Hello {$id}";
    }
}

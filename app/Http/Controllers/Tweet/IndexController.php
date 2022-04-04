<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return string
     */
    public function __invoke(Request $request)
    {
        return view('tweet.index')->with('name', 'daiki');
    }
}

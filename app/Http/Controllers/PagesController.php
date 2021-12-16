<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PagesController extends Controller
{
    public function index()
    {
        Cache::put('cachekey', 'This should be a cache key', now()->addDay());

        // $test = cache()->get();
        dd(Cache::get('cachekey'));
        return view('index');
    }
}

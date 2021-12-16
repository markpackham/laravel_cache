<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PagesController extends Controller
{
    public function index()
    {
        Cache::put('cachekey', 'This should be a cache key', now()->addDay());

        // Cache::add('cachekey2', 'Key num 2');

        // as you'd expect a forever method has no time limit
        Cache::forever('cachekey2', "I am key 2");

        // the only way to get rid of the forever cache other than flushing everything
        Cache::forget('cachekey2');

        // clear all cache
        Cache::flush();

        // $test = cache()->get();
        dd(Cache::get('cachekey2'));
        return view('index');
    }
}

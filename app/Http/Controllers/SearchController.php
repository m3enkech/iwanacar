<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Search\UserSearch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function filter(Request $request)
    {
        return UserSearch::apply($request);
    }
}
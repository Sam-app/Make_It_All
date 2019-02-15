<?php

namespace App\Http\Controllers;

use App\User;
use App\Program;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class SearchController extends Controller
{
    public function filter($query)
    {
        $problems = DB::table('problems')
                    ->where('id', '=', $query)
                    ->orWhere('userName', $query)
                    ->orWhere('department', $query)
                    ->get();
        
        return $problems;
    }
}

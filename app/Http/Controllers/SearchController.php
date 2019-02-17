<?php

namespace App\Http\Controllers;

use App\User;
use App\Program;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Problem;

class SearchController extends Controller
{

    //return row data
    //not used atm
    public function filter($query)
    {
        $problems = DB::table('problems')
                    ->where('id', '=', $query)
                    ->orWhere('userName', $query)
                    ->orWhere('department', $query)
                    ->orWhere('problemType','like','%not%')
                    ->get();
        
        return $problems;
    }

    public function completedProblems(){

        $competed_problems = Problem::where('completed','1')->orderBy('id','desc')->paginate(4);

        return view('search.completed')->with('completed_problems',$competed_problems);
    }

    
    //this is current specialist task
    public function task(){

        $problems = Problem::where('specialist_id',auth()->user()->id)
                            ->where('completed','0')
                            ->paginate(8);
       
     return view('search.mytask')->with('problems',$problems);
    }
}

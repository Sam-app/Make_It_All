<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Problem;
use App\Call;
use App\User;
use DB;

class ProblemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $problems = Problem::orderBy('id','desc')->paginate(4);

         return view('problems.index')->with('problems',$problems);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('problems.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'problemType'=>'required',
            'department'=>'required',
            'discription'=>'required'
        ]);



        //Create and save Problem
        $problem = new Problem;
        $problem->title = $request->input('title');
        $problem->problemType = $request->input('problemType');
        $problem->userName = auth()->user()->name;
        $problem->department = $request->input('department');
        $problem->discription = $request->input('discription');
        $problem->user_id = auth()->user()->id;

        $specialist = User::where('specialized',$problem->problemType)->get();
        
        if ($specialist->count()>0) {
            $problem->specialist_id = $specialist->first()->id;
        } else {
            $problem->specialist_id = 1;
        }
        

        $problem->save();
        

        return redirect('/problems')->with('success','Problem Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
       $problem = $problem = Problem::find($id);
       
       $calls = Call::where('problem_id', '=', $problem->id)->paginate(1);

      // return $calls;
        return view('problems.show')->with('problem',$problem)->with('calls',$calls);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $problem = $problem = Problem::find($id);

        
        return view('problems.edit')->with('problem',$problem);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title'=>'required',
            'problemType'=>'required',
            'userName'=>'required',
            'department'=>'required',
            'discription'=>'required'
        ]);

        //Create and save Problem
        $problem = Problem::find($id);
        $problem->title = $request->input('title');
        $problem->problemType = $request->input('problemType');
        $problem->userName = $request->input('userName');
        $problem->department = $request->input('department');
        $problem->discription = $request->input('discription');
        $problem->save();
        

        return redirect('/problems')->with('success','Problem Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $problem = Problem::find($id);
        $problem->delete();
        return redirect('/problems')->with('success','Problem Removed');

    }
}

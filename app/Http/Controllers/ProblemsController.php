<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Problem;
use App\Call;
use App\User;
use App\Tool;
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
         $ongoing_problems = Problem::where('completed','0')->orderBy('id','desc')->paginate(4);

          $competed_problems = Problem::where('completed','1')->orderBy('id','desc')->paginate(4);

         return view('problems.index')->with('ongoing_problems',$ongoing_problems)->with('competed_problems',$competed_problems);
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
            'discription'=>'required',
            'serial_number'=>'required|min:10|max:28'
        ]);



        //Create and save Problem
        $problem = new Problem;
        $problem->title = $request->input('title');
        $problem->serial_number = $request->input('serial_number');
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

        $intial_call = "Initial call -".$problem->title;
        $problem_count= Problem::all();
        $problem_id = count($problem_count)+1;

        //Create and save Call
        $call = new Call;
        $call->title = $intial_call;
        $call->problem_id = $problem->id;
        $call->discription = $request->input('discription');
        $call->tele_number = auth()->user()->tele_number;
        $call->user_id = auth()->user()->id;
        $call->caller_name = auth()->user()->name;;
        $call->save();
        

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
       
       $calls = Call::where('problem_id', '=', $problem->id)->paginate(2);

       $specialist = User::find($problem->specialist_id);

       $item = Tool::where('serial_number','=',$problem->serial_number)->first();

        //return $item;
        return view('problems.show')->with('problem',$problem)
                            ->with('calls',$calls)->with('specialist',$specialist)
                            ->with('item',$item);
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
          //  'userName'=>'required',
            'department'=>'required',
            'discription'=>'required',
            'specialist_id'=>'required',
            'completed'=>'required',
            'serial_number'=>'required|min:10|max:28'
        ]);

        //Create and save Problem
        $problem = Problem::find($id);
        $problem->title = $request->input('title');
        $problem->serial_number = $request->input('serial_number');
        $problem->problemType = $request->input('problemType');
        //$problem->userName = $request->input('userName');
        $problem->department = $request->input('department');
        $problem->discription = $request->input('discription');
        $problem->completed = $request->input('completed');
        $problem->specialist_id = $request->input('specialist_id');
        $problem->resolved_by = $request->input('resolved_by');

        $problem->save();
        

        return redirect('/problems/'.$problem->id)->with('success','Problem Updated');
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

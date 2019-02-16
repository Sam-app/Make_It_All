<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Call;

class CallsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $calls = Call::orderBy('id','desc')->paginate(1);
       return view('calls.index')->with('calls',$calls);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('calls.create');
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
            'problem_id'=>'required',
            'tele_number'=>'required',
            'discription'=>'required'
        ]);

        //Create and save Call
        $call = new Call;
        $call->title = $request->input('title');
        $call->problem_id = $request->input('problem_id');
        $call->discription = $request->input('discription');
        $call->tele_number = $request->input('tele_number');
        $call->user_id = auth()->user()->id;
        $call->caller_name = auth()->user()->name;;
        $call->save();
        

        return redirect('/calls')->with('success','Call Created');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

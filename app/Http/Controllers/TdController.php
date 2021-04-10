<?php

namespace App\Http\Controllers;

use App\Models\Td;
use Illuminate\Http\Request;

class TdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('td_create')->with('tdArr',Td::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
		$res=new Td;
		$res->name=$request->input('name');
		$res->save();
		
		$request->session()->flash('msg','Data submitted');
		return redirect('td_show');
		
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Td  $td
     * @return \Illuminate\Http\Response
     */
    public function show(Td $td)
    {
        return view('td_show')->with('tdArr',Td::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Td  $td
     * @return \Illuminate\Http\Response
     */
    public function edit(Td $td,$id)
    {		 
		 
         return view('td_edit')->with('tdArr',Td::find($id));

   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Td  $td
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Td $td)
    {
		$res=Td::find($request->id);
		$res->name=$request->input('name');
		$res->save();
		
		$request->session()->flash('msg','Data Updated');
		return redirect('td_show');
    }

    
    public function destroy(Td $td, $id)
    {
        
		Td::destroy(array('id',$id));
		
		return redirect('td_show');
    }
}

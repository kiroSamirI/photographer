<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\req;
class photographer extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user= User::find($id);
        return view('photographer_profile')->with('user',$user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $photographer = User::find($id);
        // Check for correct user
        if(auth()->user()->id !==$photographer->id){
            return redirect()->back();
        }

        return view('edit')->with('photographer', $photographer);

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
        $photographer = User::find($id);
        if($request->hasFile('cover_image')){
            
            $file_full_name = $request->file('cover_image')->getClientOriginalName();
            $filename = pathinfo($file_full_name , PATHINFO_FILENAME);
            $extention = $request->file('cover_image')->getClientOriginalExtension();
            $filenameStore = $filename . '_' . time() . '.'.$extention;
            $path = $request->file('cover_image')->storeAs('public/images' , $filenameStore);
            $photographer->cover_image = $filenameStore;
        }
        
        $photographer->name = $request->input('name');
        $photographer->email = $request->input('email');
        $photographer->phone_number = $request->input('phone_number');
        $photographer-> price= $request->input('price');
        $photographer->save();
        return redirect('/photographer_home/');
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

    public function list(){
        $photographer_id = auth()->user()->id;
        $Reqs= req::where ('photographer_id',"$photographer_id")->where ('active',1)->get();
        return view('requests.list')->with('Reqs',$Reqs);
    }
}

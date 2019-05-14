<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Img;
use App\Logger;

class imagesController extends Controller
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
        $image = new Img;
        $image->image = 'no_image';
        if($request->hasFile('image')){
            
            $file_full_name = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($file_full_name , PATHINFO_FILENAME);
            $extention = $request->file('image')->getClientOriginalExtension();
            $filenameStore = $filename . '_' . time() . '.'.$extention;
            $path = $request->file('image')->storeAs('public/images' , $filenameStore);
            $image->image = $filenameStore;
            $image->use_id=auth()->user()->id;
            $image->save();

            
        }else{
            return redirect('/photographer_home');
        }
        return redirect('/photographer_home');
        //return redirect('/addimage');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function list(){
        $use_id = auth()->user()->id;
        $images= Img::where ('use_id',"$use_id")->get();
        return view('images.list')->with('images',$images);
    }

}

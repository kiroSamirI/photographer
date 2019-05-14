<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\req;
use App\Logger;
class requestController extends Controller
{
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private function mylog(array $data , Loger $loger){
        //$log = new $logger;
        $loger->log($data);
    }
    public function index()
    {
        //return view('resource.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mycreate($id)
    {
        return view('requests.create')->with('id',$id);
    }

    public function create()
    {
        return view('requests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'address' => ['required', 'string'],
            'category' => ['required', 'string'],
            'contact_number' => ['required'],
            'start_date' => ['required', 'date'],
        ]);
        
        $my_request = new req;
        //dd($request);
        $my_request->date = $request->input('start_date');
        $my_request->category = $request->input('category');
        $my_request->place = $request->input('place');
        $my_request->contact_number = $request->input('contact_number');
        $my_request->use_id= auth()->user()->id;
        $my_request->photographer_id=$request->input('photographer_id');
        $my_request->date=$request->input('start_date');
        $my_request->save();
        $data = array("operation" => "insert",
        "comment" => "user ".$my_request ->photographer_id ." take request from " .$my_request->use_id);

        $this->mylog($data , new logToDBController);
        $this->mylog($data , new logToFileController);
        return redirect('/user_home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $req = req::find($id);
        return view('requests.show')->with('req',$req);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('requests.create')->with('id',$id);
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
        $req = req::find($id);
        $req->active=0;
        $req->save();

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
        return 123;
        $req= req::find($id);
        $req->destroy();
        return 123;
        
    }
}

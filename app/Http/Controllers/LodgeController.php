<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lodge;
use DB;
class LodgeController extends Controller
{
    //This controller will deal with managing lodges.

    public function index()
    {
        //$lodges = Lodge::where('user_id',Auth::user()->id)->get();
        $lodges=Lodge::orderBy('created_at','desc')->paginate(4);
        return view('lodges.index')->with('lodges',$lodges);
    }

    public function create()
    {
        return view('lodges.create');
    }

    public function store(Request $request)
    {
        $this->validation($request);
        Lodge::create($request->all());

        return redirect('/lodges')->with('success','Lodge Added Successfully!!');

    }

    public function validation($request)
    {
        return $this->validate($request,[
            'lodge_name' =>'required|max:190',
        ]);
    }


    
    public function show($id)
    {
        $lodges=Lodge::find($id);

        return view('lodges.show')->with('lodges',$lodges);
    }
   

    public function edit($id)
    {
        $lodges=Lodge::find($id);

        return view('lodges.edit')->with('lodges',$lodges);
    }


    public function update(Request $request, $id)
    {
     
        $this->validate($request,[
            //add validation here.
        ]);

        $lodges=Lodge::find($id);

        $lodges->lodge_name=$request->lodge_name;

        $lodges->save();

        return redirect('/lodges')->with('success','Lodge name Edited');
    }

    public function delete($id)
    {
        Lodge::destroy($id);

        return redirect('/lodges')->with('success','Lodge deleted successfully');

    }

public function enable($id){
    $enable=Lodge::find($id);
    
            $enable->disable_enable=1;
    
            $enable->save();
    
return back();


}
public function disable($id){
    $disable=Lodge::find($id);
    
            $disable->disable_enable=0;
    
            $disable->save();
            return back();
    
    }


}

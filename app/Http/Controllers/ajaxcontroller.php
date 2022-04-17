<?php

namespace App\Http\Controllers;
use App\Models\peek;
use App\Models\books;
use Illuminate\Http\Request;

class ajaxcontroller extends Controller
{
    //

    function index ()
    {
    	return view('signup');
    }


    function insertdata(Request $Request)
    {
    	$data=new peek;
    	request()->validate([
            'xname' => 'required',
            'xaddress' => 'required',
            'xage'=>'required'
        ]);


        //$data=peek::create($Request->all());
        $data->name=$Request->xname;
        $data->address=$Request->xaddress;
        $data->age=$Request->xage;


        $data->save();

 return redirect('/fetch')->with('success','Data created successfully.');
                        


    }


    function fetch()
    {
    	$book=peek::all();

    	return view('showdata',['data'=>$book])->with('i');
    }



      public function destroy($id)
   	 {
        $book =peek::find($id);
         $book->delete();


        return redirect('/fetch')
                        ->with('success','Data deleted successfully');

       

    }


public function edit($id)
{
	$book=peek::find($id);
	return view('edit',['data'=>$book]);
	
}

public function update(Request $Request)
{
   $data=peek::find($Request->id);
	request()->validate([
            'xname' => 'required',
            'xaddress' => 'required',
            'xage'=>'required'
        ]);

	

	    $data->name=$Request->xname;
        $data->address=$Request->xaddress;
        $data->age=$Request->xage;

        $data->save();

         return redirect('/fetch')
                        ->with('success','Data update successfully');


}

}

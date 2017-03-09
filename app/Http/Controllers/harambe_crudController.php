<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\harambe_crud;

class harambe_crudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function _construct(){

        $this->middleware('auth',['except' => 'index']);

     }
    public function index()
    {
        //show data


          $birth_date = harambe_crud::get()->pluck('birthdate','id');
           $full_name = harambe_crud::get()->pluck('fullname','id');

        $blogs =  harambe_crud::all();
        return view('harambe_crud.index',['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create new data
        return view('harambe_crud.create');
    }


 public function authors()
    {
        //create new data
  
        return view('harambe_crud.authors');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // validation
      $this->validate($request,[
      'firstname'=> 'required',
      'lastname' => 'required',
      'gender'=> 'required',
      'bmonth' => 'required',
      'bday' => 'required',
      'byear' => 'required',
      'course'=> 'required',
      'year' => 'required'
    ]);
      // create new data
    $blog = new harambe_crud;
    $blog->firstname = $request->firstname;
        $blog->lastname = $request->lastname;
        $blog->gender = $request->gender;
        $blog->bday = $request->bday;
        $blog->bmonth = $request->bmonth;
        $blog->byear = $request->byear;
        $blog->course = $request->course;
        $blog->year = $request->year;
    $blog->save();
    return redirect()->route('index.index')->with('alert-success','Data Hasbeen Saved!');

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
        $blog = harambe_crud::findOrFail($id);
        // return to the edit views
        return view('harambe_crud.edit',compact('blog'));
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
        // validation
        $this->validate($request,[
      'firstname'=> 'required',
      'lastname' => 'required',
      'gender'=> 'required',
      'bmonth' => 'required',
      'bday' => 'required',
      'byear' => 'required',
      'course'=> 'required',
      'year' => 'required'
      ]);

        $blog = harambe_crud::findOrFail($id);
        $blog->firstname = $request->firstname;
        $blog->lastname = $request->lastname;
        $blog->gender = $request->gender;
        $blog->bday = $request->bday;
        $blog->bmonth = $request->bmonth;
        $blog->byear = $request->byear;
        $blog->course = $request->course;
        $blog->year = $request->year;
        $blog->save();

        return redirect()->route('index.index')->with('alert-success','Data Hasbeen Saved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete data
        $blog = harambe_crud::findOrFail($id);
        $blog->delete();
        return redirect()->route('index.index')->with('alert-success','Data Hasbeen Saved!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use DB;
use  Illuminate\Support\Facades\Validator;
class Studentcontroller extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students=DB::table('student')->get();
        return view('students')->with(compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('add');
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
        $validator=Validator::make($request->all(),[
            'name' => 'required|max:255',
            'email' => 'required|max:200',
            'post' => 'required',
             'image' => 'required'
        ]
    );
    if($validator->passes())
    {
        $student=new Student();
        $student->name=$request->input('name');
        $student->email=$request->input('email');
        $student->post=$request->input('post');
        if($request->hasfile('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();//getting image extension
            $filename=time() . '.' . $extension;
            $file->move('uploads/student',$filename);
            $student->image=$filename;
        }
        else{
            return $request;
            $student->image='';
        }
        $student->save();
       $request->session()->flash('msg','data insert successfully');
        return redirect('/home');
        

    }
    else{
        return redirect('/home/add')->witherrors($validator)->withinput();
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,request $request)
    {
        //
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,request $request)
    {
        //
        $students=Student::where('id',$id)->first();
        if(!$students)
        {
            $request->session()->flash('editmsg','data not found');
            return redirect('home');
        }
        return view('edit')->with(compact('students'));
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
        $validator=Validator::make($request->all(),[
            'name' => 'required|max:255',
            'email' => 'required|max:200',
            'post' => 'required',
             'image' => 'required'
        
        ]

        );
        if($validator->passes())
        {
            $student=Student::find($id);
            $student->name=$request->input('name');
        $student->email=$request->input('email');
        $student->post=$request->input('post');
        if($request->hasfile('file'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filenmae=time() .'.'. $extension;
            $file->move('uploads/student',$filename);
            $request->image=$filename;
        }
        else{
            return $request;
            $request->image='';
        }
        $student->save();
        $request->session()->flash('upmsg','data update successfull');
        return redirect('/home')->with(compact('student'));
        }
        else{
        return redirect('/home/edit/'.$id)->witherrors($validator)->withinput();
    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        //
        Student::where('id',$id)->delete();
        $request->session()->flash('delmsg','data delete successfull');
        return redirect('/home');

    }
}

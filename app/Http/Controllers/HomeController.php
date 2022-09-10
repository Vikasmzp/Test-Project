<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Subject;
use Redirect;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $value = teacher::all();
    //    $value = Teacher::with('teacher')->get();
    //    return view('show',compact('value'));

       $value = Subject::with('teacher')->get();
       return  view('show1',compact('value'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 

         $request->validate([
          'name' => 'required|min:5',
           'address' => 'required',
           'email' => 'required|email',
           'number' => 'required',
           'subject' => 'required',
       ]);

        $teacher = new Teacher;
        $teacher->name = $request->name;
        $teacher->address=$request->address;
        $teacher->email = $request->email;
        $teacher->number = $request->number;
        // $teacher->subject = $request->subject;
        $teacher->save();  

        $id=$teacher->id;
        $subject = Subject::create([
         'teachersubject' => $request->subject,
         'teacher_id' => $id,

        ]); 
        
        return redirect('inc')->with('msg', 'inserted data successfully');
        // return redirect::route('inc.show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        // $showData = Teacher::all();
        // return view('show',compact('showData'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

       $value = Teacher::find($id);
       $sub = Subject::where('teacher_id', $id)->first();
       
       return view('edit',compact('value','sub'));
    
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
               
         $request->validate([
          'name' => 'required|min:5',
           'address' => 'required',
           'email' => 'required|email',
           'number' => 'required',
           'subject' => 'required',
       ]);


         $teacher = Teacher::find($id);
        $teacher->name = $request->name;
        $teacher->address=$request->address;
        $teacher->email = $request->email;
        $teacher->number = $request->number;
        // $teacher->subject = $request->subject;
        $teacher->update();

           $subject = Subject::where('teacher_id', $id)->first();
           $subject->teachersubject = $request->subject;
           $subject->update(); 

        // $id=$teacher->id;
        // $subject = Subject::create([
        //  'teachersubject' => $request->subject,
        //  'teacher_id' => $id,

        // ]); 
        
        return redirect('inc')->with('msg', 'inserted data successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // $Delete = Teacher::find($id);
        // $Delete->Delete();
        // return redirect('inc/')->with('msg1', 'inserted data successfully');
      
        Teacher::find($id)->delete();
        
        Subject::where('teacher_id',$id)->delete();
           return Redirect::back()->with('msg', 'The Message');
        // return redirect()->route('inc')->with('msg', 'deleted data successfully');  
    }
}

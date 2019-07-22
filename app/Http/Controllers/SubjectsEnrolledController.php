<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubjectEnrolled;
use App\Student;
use App\Subject;
use App\Cart;
class SubjectsEnrolledController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subject_enrolled=SubjectEnrolled::offset(0)->limit(10)->get();
       return $subject_enrolled;
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
        
        $sample=$request->subject;
        $this_data=array();
        $id=$request->studentid;
        
        $cartid=Cart::where('studid','=',$id)->first();
        if(!$cartid->id){
            $cart='';
        }
        else{
            $cart=$cartid->id;
        }
       SubjectEnrolled::where('studid','=',$id)->delete();
        foreach ($sample as $key =>$value) {
            
            $my_data[$key]=Subject::where('scode','=',$value)->first();
            //kulang
            $data['studid']=$id;
            //check the schoolyear
            if($my_data[$key]['yr']==1 && $my_data[$key]['semester']==1){
                $data['schoolyear']=$request->first_schoolyear1;
               
                }
              elseif($my_data[$key]['yr']==1 && $my_data[$key]['semester']==2){
                $data['schoolyear']=$request->first_schoolyear2;
               
                }
                else if($my_data[$key]['yr']==2 && $my_data[$key]['semester']==1){
                    $data['schoolyear']=$request->second_schoolyear1;
                  
                }
                else if($my_data[$key]['yr']==2 && $my_data[$key]['semester']==2){
                    $data['schoolyear']=$request->second_schoolyear2;
                     
                }
                else if($my_data[$key]['yr']==3 && $my_data[$key]['semester']==1){
                    $data['schoolyear']=$request->third_schoolyear1;
                  
                }
                else if($my_data[$key]['yr']==3 && $my_data[$key]['semester']==2){
                    $data['schoolyear']=$request->third_schoolyear2;
                     
                }
                else if($my_data[$key]['yr']==4 && $my_data[$key]['semester']==1){
                    $data['schoolyear']=$request->fourth_schoolyear1;
                     
                }
                else if($my_data[$key]['yr']==4 && $my_data[$key]['semester']==2){
                    $data['schoolyear']=$request->fourth_schoolyear2;
                    
                }
            
            else{
                $data['schoolyear']=' ';
            }
            //ready nah
            $data['edpcode']=$my_data[$key]['department'].''.$my_data[$key]['yr'].''.$my_data[$key]['semester'].'-'.$my_data[$key]['scode'].'A';
            $data['subjectcode']=$my_data[$key]['scode'];
            $data['subjectnumber']=$my_data[$key]['subjectnum'];
            $data['subjecttitle']=$my_data[$key]['title'];
            $data['semester']=$my_data[$key]['semester'];
            $data['lec']=$my_data[$key]['lec'];
            $data['lab']=$my_data[$key]['lab'];
            $data['units']=$my_data[$key]['unit'];
            $this_data[$key]=$data;
            //create SubjectEnrolled Object
            
            
            //check if the data exist already
            $check=SubjectEnrolled::where('studid','=',$id)->count();
            /*$check=SubjectEnrolled::where('studid','=','218-0003')->where('schoolyear','=',$data['schoolyear'])->where('edpcode','=',$data['edpcode'])->where('subjectcode','=',$data['subjectcode'])->where('subjectnumber','=',$data['subjectnumber'])->where('subjecttitle','=',$data['subjecttitle'])->where('semester','=',$data['semester'])->count();*/
            if($check){
                
                $store_data=new SubjectEnrolled();
                $store_data->studid=$id;
                $store_data->cartid=$cart;
                $store_data->schoolyear=$data['schoolyear'];
                $store_data->edpcode=$data['edpcode'];
                $store_data->subjectcode= $data['subjectcode'];
                $store_data->subjectnumber=$data['subjectnumber'];
                $store_data->subjecttitle=$data['subjecttitle'];
                $store_data->semester=$data['semester'];
                $store_data->lec=$data['lec'];
                $store_data->lab=$data['lab'];
                $store_data->units=$data['units'];
                $store_data->save();
            }
            else{
                $store_data=new SubjectEnrolled();
                $store_data->studid=$id;
                $store_data->cartid=$cart;
                $store_data->schoolyear=$data['schoolyear'];
                $store_data->edpcode=$data['edpcode'];
                $store_data->subjectcode= $data['subjectcode'];
                $store_data->subjectnumber=$data['subjectnumber'];
                $store_data->subjecttitle=$data['subjecttitle'];
                $store_data->semester=$data['semester'];
                $store_data->lec=$data['lec'];
                $store_data->lab=$data['lab'];
                $store_data->units=$data['units'];
                $store_data->save();
            }
            //
            //$this_data['title']=$my_data->title;
        }
        return redirect()->to('/')->with('success','Student\'s subject added successfully!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $studid=$request->studentid;
        
        $this_stud_record=Student::where('studentid','=',$studid)->first();
        if(!$this_stud_record){
            return redirect()->to('/')->with('error','This id number is not available. Try a different student id number!');
        }
        $this_subject=Subject::where("kurses", "LIKE", "%" . $this_stud_record->course . "%")->where('prospectus',$this_stud_record->prospectus)->orderBy('semester')->orderBy('yr')->get();
        $this_studid = Student::find($studid)->subjectEnrolled()->where('studid',$studid)->get();
        return view('subject-enrolled')->with('this_studid',$this_studid)->with('student_record',$this_stud_record)->with('this_subject',$this_subject);
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

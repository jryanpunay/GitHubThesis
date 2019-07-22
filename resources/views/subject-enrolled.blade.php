<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>
<body>
    <div class="container-fluid">
    <div class="row bg-dark text-white">
        <div class="container">
        <h1 class="display-4 text-center p-5">SCSIT EDP STUDENT ADDING SUBJECT ENROLLED</h1>
        </h1>
    </div>
    
    </div>
    <div class="container p-3">
        
        <div class="col-md-12 ">
            <h2>Student ID:{{$student_record->studentid}}
            <span class="ml-5 mr-3">Fullname:{{$student_record->lastname}},
            {{$student_record->firstname}}
            {{$student_record->middlename}} </span>
            Course:{{$student_record->course}}-
            {{$student_record->studyear}}
            
            </h2>
           
           <!--@foreach($this_studid as $student)
            {{$student->subjectcode}}-{{$student->studid}}
            
           @endforeach
            -->
            </div>
    </div>
            <div class="container">
            <form action="../student-enrolled"  method='POST'>
            {{csrf_field()}}
                <input type="hidden" name="studentid" value="{{$student_record->studentid}}"/>
                <div class="row">
                @if($student_record->studyear>=1)
                    <div class="col-md-6">
                        <table class="table table-bordered table-striped">
                            <tr>    
                                <td colspan="2" class="text-center">FIRST YEAR
                                    <span class="ml-5">SY:
                                        <select name="first_schoolyear1">
                                            <option value="2008-2009">2008-2009</option>
                                            <option value="2009-2010">2009-2010</option>
                                            <option value="2010-2011">2010-2011</option>
                                            <option value="2011-2012">2011-2012</option>
                                            <option value="2012-2013">2012-2013</option>
                                            <option value="2013-2014">2013-2014</option>
                                            <option value="2014-2015">2014-2015</option>
                                            <option value="2015-2016">2015-2016</option>
                                            <option value="2016-2017">2016-2017</option>
                                            <option value="2017-2018">2017-2018</option>
                                            <option value="2018-2019">2018-2019</option>
                                            <option value="2019-2020">2019-2020</option>
                                        </select>
                                    </span>    
                                </td>
                            </tr>
                            @foreach($this_subject as $subject)
                            <tr>
                            
                            @if($subject->yr==1 && $subject->semester==1)  
                            <td><input type="checkbox" name="subject[]" value="{{$subject->scode}}"/></td>
                            <td>{{$subject->scode}} -
                            {{$subject->subjectnum}} -
                            {{$subject->title}}-
                           
                            </td>
                            @endif
                            </tr>
                        @endforeach
                        </table>
                    </div>
                    
                    <div class="col-md-6">
                        <table class="table table-bordered table-striped">
                            <tr>    
                                <td colspan="2" class="text-center">FIRST YEAR
                                    <span class="ml-5">SY:
                                        <select name="first_schoolyear2">
                                            <option value="2008-2009">2008-2009</option>
                                            <option value="2009-2010">2009-2010</option>
                                            <option value="2010-2011">2010-2011</option>
                                            <option value="2011-2012">2011-2012</option>
                                            <option value="2012-2013">2012-2013</option>
                                            <option value="2013-2014">2013-2014</option>
                                            <option value="2014-2015">2014-2015</option>
                                            <option value="2015-2016">2015-2016</option>
                                            <option value="2016-2017">2016-2017</option>
                                            <option value="2017-2018">2017-2018</option>
                                            <option value="2018-2019">2018-2019</option>
                                            <option value="2019-2020">2019-2020</option>
                                        </select>
                                    </span>    
                                </td>
                            </tr>
                            @foreach($this_subject as $subject)
                            <tr>
                            @if($subject->yr==1 && $subject->semester==2)  
                            <td><input type="checkbox" name="subject[]" value="{{$subject->scode}}"/></td>
                            <td>{{$subject->scode}} -
                            {{$subject->subjectnum}} -
                            {{$subject->title}}-
                            
                            </td>
                            @endif
                            </tr>
                        @endforeach
                        </table>
                    </div>
                @endif
                @if($student_record->studyear>=2)
                    <div class="col-md-6">
                        <table class="table table-bordered table-striped">
                            <tr>    
                                <td colspan="2" class="text-center">SECOND YEAR
                                    <span class="ml-5">SY:
                                        <select name="second_schoolyear1">
                                            <option value="2008-2009">2008-2009</option>
                                            <option value="2009-2010">2009-2010</option>
                                            <option value="2010-2011">2010-2011</option>
                                            <option value="2011-2012">2011-2012</option>
                                            <option value="2012-2013">2012-2013</option>
                                            <option value="2013-2014">2013-2014</option>
                                            <option value="2014-2015">2014-2015</option>
                                            <option value="2015-2016">2015-2016</option>
                                            <option value="2016-2017">2016-2017</option>
                                            <option value="2017-2018">2017-2018</option>
                                            <option value="2018-2019">2018-2019</option>
                                            <option value="2019-2020">2019-2020</option>
                                        </select>
                                    </span>    
                                </td>
                            </tr>
                            @foreach($this_subject as $subject)
                            <tr>
                            @if($subject->yr==2 && $subject->semester==1)  
                            <td><input type="checkbox" name="subject[]" value="{{$subject->scode}}"/></td>
                            <td>{{$subject->scode}} -
                            {{$subject->subjectnum}} -
                            {{$subject->title}}-
                            
                            </td>
                            @endif
                            </tr>
                        @endforeach
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table class="table table-bordered table-striped">
                            <tr>    
                                <td colspan="2" class="text-center">SECOND YEAR
                                    <span class="ml-5">SY:
                                        <select name="second_schoolyear2">
                                            <option value="2008-2009">2008-2009</option>
                                            <option value="2009-2010">2009-2010</option>
                                            <option value="2010-2011">2010-2011</option>
                                            <option value="2011-2012">2011-2012</option>
                                            <option value="2012-2013">2012-2013</option>
                                            <option value="2013-2014">2013-2014</option>
                                            <option value="2014-2015">2014-2015</option>
                                            <option value="2015-2016">2015-2016</option>
                                            <option value="2016-2017">2016-2017</option>
                                            <option value="2017-2018">2017-2018</option>
                                            <option value="2018-2019">2018-2019</option>
                                            <option value="2019-2020">2019-2020</option>
                                        </select>
                                    </span>    
                                </td>
                            </tr>
                            @foreach($this_subject as $subject)
                            <tr>
                            @if($subject->yr==2 && $subject->semester==2)  
                            <td><input type="checkbox" name="subject[]" value="{{$subject->scode}}"/></td>
                            <td>{{$subject->scode}} -
                            {{$subject->subjectnum}} -
                            {{$subject->title}}-
                           
                            </td>
                            @endif
                            </tr>
                        @endforeach
                        </table>
                    </div>
                @endif
                @if($student_record->studyear>=3)
                    <div class="col-md-6">
                        <table class="table table-bordered table-striped">
                            <tr>    
                                <td colspan="2" class="text-center">THIRD YEAR
                                    <span class="ml-5">SY:
                                        <select name="third_schoolyear1">
                                            <option value="2008-2009">2008-2009</option>
                                            <option value="2009-2010">2009-2010</option>
                                            <option value="2010-2011">2010-2011</option>
                                            <option value="2011-2012">2011-2012</option>
                                            <option value="2012-2013">2012-2013</option>
                                            <option value="2013-2014">2013-2014</option>
                                            <option value="2014-2015">2014-2015</option>
                                            <option value="2015-2016">2015-2016</option>
                                            <option value="2016-2017">2016-2017</option>
                                            <option value="2017-2018">2017-2018</option>
                                            <option value="2018-2019">2018-2019</option>
                                            <option value="2019-2020">2019-2020</option>
                                        </select>
                                    </span>    
                                </td>
                            </tr>
                            @foreach($this_subject as $subject)
                            <tr>
                            @if($subject->yr==3 && $subject->semester==1)  
                            <td><input type="checkbox" name="subject[]" value="{{$subject->scode}}"/></td>
                            <td>{{$subject->scode}} -
                            {{$subject->subjectnum}} -
                            {{$subject->title}}-
                           
                            </td>
                            @endif
                            </tr>
                        @endforeach
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table class="table table-bordered table-striped">
                            <tr>    
                                <td colspan="2" class="text-center">THIRD YEAR
                                    <span class="ml-5">SY:
                                        <select name="third_schoolyear2">
                                            <option value="2008-2009">2008-2009</option>
                                            <option value="2009-2010">2009-2010</option>
                                            <option value="2010-2011">2010-2011</option>
                                            <option value="2011-2012">2011-2012</option>
                                            <option value="2012-2013">2012-2013</option>
                                            <option value="2013-2014">2013-2014</option>
                                            <option value="2014-2015">2014-2015</option>
                                            <option value="2015-2016">2015-2016</option>
                                            <option value="2016-2017">2016-2017</option>
                                            <option value="2017-2018">2017-2018</option>
                                            <option value="2018-2019">2018-2019</option>
                                            <option value="2019-2020">2019-2020</option>
                                        </select>
                                    </span>    
                                </td>
                            </tr>
                            @foreach($this_subject as $subject)
                            <tr>
                            @if($subject->yr==3 && $subject->semester==2)  
                            <td><input type="checkbox" name="subject[]" value="{{$subject->scode}}"/></td>
                            <td>{{$subject->scode}} -
                            {{$subject->subjectnum}} -
                            {{$subject->title}}-
                           
                            </td>
                            @endif
                            </tr>
                        @endforeach
                        </table>
                    </div>
                @endif
                @if($student_record->studyear>=4)
                    <div class="col-md-6">
                        <table class="table table-bordered table-striped">
                            <tr>    
                                <td colspan="2" class="text-center">FOURTH YEAR
                                    <span class="ml-5">SY:
                                        <select name="fourth_schoolyear1">
                                            <option value="2008-2009">2008-2009</option>
                                            <option value="2009-2010">2009-2010</option>
                                            <option value="2010-2011">2010-2011</option>
                                            <option value="2011-2012">2011-2012</option>
                                            <option value="2012-2013">2012-2013</option>
                                            <option value="2013-2014">2013-2014</option>
                                            <option value="2014-2015">2014-2015</option>
                                            <option value="2015-2016">2015-2016</option>
                                            <option value="2016-2017">2016-2017</option>
                                            <option value="2017-2018">2017-2018</option>
                                            <option value="2018-2019">2018-2019</option>
                                            <option value="2019-2020">2019-2020</option>
                                        </select>
                                    </span>    
                                </td>
                            </tr>
                             @foreach($this_subject as $subject)
                             <tr>
                            @if($subject->yr==4 && $subject->semester==1)  
                            <td><input type="checkbox" name="subject[]" value="{{$subject->scode}}"/></td>
                            <td>{{$subject->scode}} -
                            {{$subject->subjectnum}} -
                            {{$subject->title}}-
                            
                            </td>
                            @endif
                            </tr>
                        @endforeach
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table class="table table-bordered table-striped">
                            <tr>    
                                <td colspan="2" class="text-center">FOURTH YEAR
                                    <span class="ml-5">SY:
                                        <select name="fourth_schoolyear2">
                                            <option value="2008-2009">2008-2009</option>
                                            <option value="2009-2010">2009-2010</option>
                                            <option value="2010-2011">2010-2011</option>
                                            <option value="2011-2012">2011-2012</option>
                                            <option value="2012-2013">2012-2013</option>
                                            <option value="2013-2014">2013-2014</option>
                                            <option value="2014-2015">2014-2015</option>
                                            <option value="2015-2016">2015-2016</option>
                                            <option value="2016-2017">2016-2017</option>
                                            <option value="2017-2018">2017-2018</option>
                                            <option value="2018-2019">2018-2019</option>
                                            <option value="2019-2020">2019-2020</option>
                                        </select>
                                    </span>    
                                </td>
                            </tr>
                            @foreach($this_subject as $subject)
                            <tr>
                            @if($subject->yr==4 && $subject->semester==2)  
                            <td><input type="checkbox" name="subject[]" value="{{$subject->scode}}"/></td>
                            <td>{{$subject->scode}} -
                            {{$subject->subjectnum}} -
                            {{$subject->title}}-
                           
                            </td>
                            @endif
                            </tr>
                        @endforeach
                        </table>
                    </div>
                </div>
                @endif
                
            </div>
    <div class="container">
        <div class="row">
        <input class=" right btn btn-success pl-5 pt-4 pb-2 pr-5" type="submit" value="Save"/>
        </div>
        </form>
    </div>
    <div class="container-fluid">
        <div class="row bg-dark text-white mt-4">
            <div class="container display-4 p-5">
                SCSIT MADRIDEJOS BRANCH
            </div>
        </div>
    </div>
        
<script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
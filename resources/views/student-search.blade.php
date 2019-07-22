<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>
<body>
<div class="container-fluid bg-primary text-white">
    <div class="row">
        <div class="container">
            <div class="col-md-12 display-4 text-center p-5">
                SCSIT EDP SYSTEM 2019
            </div>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div id="message" class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
</div>
@endif
@if ($message = Session::get('error'))
<div id="message" class="alert alert-danger alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
</div>
@endif
<div class="row">
    <div class="container d-flex justify-content-center">
        <div class="col-md-4 border border-primary m-5 p-5">
            <form action="../student-search" method="GET">
                <div class="form-group">
                
                    <label for="exampleInput">Student ID:</label>
                    <input type="text" class="form-control" name="studentid" id="exampleInput" aria-describedby="studentidhelp" placeholder="Enter a student ID">
                    <small id="studentidhelp" class="form-text text-muted">Each student has its own student id number.</small>
                </div>
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
    </div>
</div>
 <div class="container-fluid">
        <div class="row bg-dark text-white">
            <div class="container display-4 p-5">
                SCSIT MADRIDEJOS BRANCH
            </div>
        </div>
    </div>
        

<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<script>
$('#message').delay(2000).hide('slow');
</script>

</body>
</html>
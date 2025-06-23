
<meta charset="utf-8">
<title>Student-Library</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Minimal Admin & Dashboard Template" name="description">
<meta content="Themesbrand" name="author">
<!-- App favicon -->
<link rel="shortcut icon" href=" {{ asset('steex/layouts/assets/images/favicon.ico')}}">
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    #a{
        background-color: blue;
        border: none;
        border-radius: 10px;
        color: white;
        width:150px; height: 40px;

    }
    #a:hover{
        background-color: green;
    }
</style>


            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <marquee behavior="1" direction="right"><h4 class="mb-sm-0">Welcome To E-library</h4></marquee>
                                <a href="{{route('studentdashboard')}}"> <button id="a"> Go-To-Dashbord</button></a>


                            </div>
                        </div>
                    </div>
                    <center>
                    <div class="body">
                        <div><img src="image/33.jpg" alt="" style="width:950px; height: 600px;border-radius: 15px;"></div>
                     <div class="page">
                    </center>
                    <!-- end page title -->



            <!-- End Page-content -->



    </div>




@endsection

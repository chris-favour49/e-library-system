<!DOCTYPE html>
<html lang =eng>
<title>Update Page</title>
</html>
@extends('master')
@section('content')
<div class="page-content">

    @foreach ($users as $user)
    @endforeach


    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Update Book</h6>
                    <p class="text-muted mb-3">Welcome to Update Page</p>
                    <ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <li><a href="{{ route('tasks')}}"  class="btn btn-primary text-right"><i class="fa fa-sign-out"></i><<  Back</a></li>
                    </ul>
                    @if (\Session::has('success'))
                  <div class="alert-success alert-dismissible fade show" role="alert">
                  </div>
                    {{ \Session::get('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
                  </div>
                  @endif
                       <form class="forms-sample" action="{{ route('updatetask',) }}" method="post">
                        @csrf
                        <input type="hidden" value="{{$task->id}}" name="taskid">
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">ISBN</label>
                                <input type="text" class="form-control mb-4 mb-md-0"  value="{{$task->isbn}}" name="isbn">
                                <div class="mb-3">
                                    <div class="mb-3">
                                        <label for="customername-field" class="form-label">Book Title</label>
                                        <input type="text" id="book" name="book" class="form-control"value="{{$task->book}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="customername-field" class="form-label">Author</label>
                                        <input type="text" id="author" name="author" class="form-control" value="{{$task->author}}">
                                  </div>
                                    <div class="mb-3">
                                        <label for="customername-field" class="form-label">Category</label>
                                    <option value= "{{$task->category}}" name="category" class="form-control">
                                        {{$task->category}} </option>
                                        <select id="category" name="category" value= "{{$task->category}}" class="form-control">
                                            <option  value= "{{$task->category}}">Please Select Category</option>
                                            <option value="Computer Science">Computer Science</option>
                                            <option value="Mathematics">Mathematics</option>
                                            <option value="Statistics">Statistics</option>
                                      </select>
                              </div>

                                    <div class="mb-3">
                                        <label for="email-field" class="form-label">File Upload</label>
                                        <input type="file" id="pdf_path" name="pdf_path" class="form-control" accept="application/pdf" >
                                    </div>


                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


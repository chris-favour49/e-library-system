<!DOCTYPE html>
<html lang =eng>
<title> Task Management</title>
</html>
@extends('master')
@section('content')
<div class="page-content">
    @foreach ($projects as $project)
    @endforeach
    @foreach ($users as $user)
    @endforeach

    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Update task</h6>
                    <p class="text-muted mb-3">Welcome to ask Update Page</p>
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
                       <form class="forms-sample" action="{{ route('updatetask') }}" method="post">
                        @csrf
                        <input type="hidden" value="{{$task->id}}" name="taskid">
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Task Name</label>
                                <input type="text" class="form-control mb-4 mb-md-0"  value="{{$task->taskname}}" name="taskname" op>
                                <div class="mb-3">
                                    <label for="customername-field" class="form-label">Project</label>
                                     <option value= "{{$project->id}}" name="project" class="form-control">
                                      {{$project->projectname}}</option>
                                    <select  name="project" class="form-control">
                                        <option value="">Select a Project</option>
                                        @foreach ($projects as $project)
                                        <option value="{{$project->id }}">{{$project->projectname}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="customername-field" class="form-label">Assignee</label>
                                    <option value= "{{$user->id}}" name="assignee" class="form-control">
                                        {{$user->username}}</option>
                                    <select  name="assignee" class="form-control">
                                        <option value="">Select an Assignee</option>
                                        @foreach ($users as $user)
                                        <option value="{{$user->id }}">{{$user->username}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Due Time</label>
                                <input type="date" id="due" name="due" class="form-control" value="{{$task->due}}"  placeholder="Enter Task Due" required >
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Priority</label>
                                <option value= "{{$task->priority}}" name="priority" class="form-control">
                                      {{$task->priority}}</option>
                                      <select id="priority" name="priority" class="form-control">
                                        <option>Please Select Priority</option>
                                        <option>Low</option>
                                        <option>Medium</option>
                                        <option>High</option>
                                    </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Status</label>
                                <option value= "{{$task->status}}" name="status" class="form-control">
                                    {{$task->status}}</option>
                                      <select id="" name="status" class="form-control">
                                        <option>Please Select Status</option>
                                        <option>Not Started</option>
                                        <option>In Progress</option>
                                        <option>In Complete</option>
                                        <option>Completed</option>
                                    </select>
                            </div>
                        </div>
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


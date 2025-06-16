<!DOCTYPE html>
<html lang =eng>
<title> Project Management</title>
</html>
 <!-- end page title -->
@extends('master')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        @if (\Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Congrats! </strong>{{ \Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
        </div>
    @endif
    @if (\Session::has('danger'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>OOPS! </strong>{{ \Session::get('danger') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
    </div>
@endif
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Project Management</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Project Manager</a></li>
                            <li class="breadcrumb-item active">Project-List</li>
                        </ol>
                        <div class="page-title-right">
                            <a href="{{route('projects')}}" class="btn btn-sm btn-primary edit-item-btn"><< Back</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <!-- end card header -->

                    <div class="card-body">
                        <div id="customerList">
                            <div class="row g-4 mb-3">
                                <div class="col-sm-auto">
                                </div>
                            </div>

                            <div class="table-responsive table-card mt-3 mb-1">
                                <table class="table align-middle table-nowrap" id="customerTable">

                                            <th class="sort" data-sort="email">SN</th>
                                            <th class="sort" data-sort="customer_name">Project Name</th>
                                            <th class="sort" data-sort="phone">Assigned Task</th>
                                            <th class="sort" data-sort="status">Date Created</th>
                                        </tr>
                                    </thead>
                                            <tbody>
                                                @php
                                                     $count = 1;
                                                @endphp

                                                @foreach ($tasks as $project)

                                                <tr>
                                                    <td>{{ $count }}</td>
                                                    <td>{{ $project->project }}</td>
                                                    <td>{{ $project->taskname }}</td>
                                                    <td>{{ $project->datecreated }}</td>
                                                    </tr>
                                               @php
                                                     $count++;
                                                @endphp

                                                @endforeach
                                            </tbody>
                                          </table>
                                        </div>

                                                </div>
                                            </td>
                                        </tr>

                            </div>


                        </div>
                    </div><!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end col -->
        </div>


@endsection

<!DOCTYPE html>
<html lang =eng>
<title> User Management</title>
</html>
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
                    <h4 class="mb-sm-0">user Management</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">user manager</a></li>
                            <li class="breadcrumb-item active">user-List</li>
                        </ol>
                        <div class="page-title-right">
                            <a href="{{route('dashboard')}}" class="btn btn-sm btn-primary edit-item-btn"><< Back</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Add, Edit & Remove</h4>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div id="customerList">
                            <div class="row g-4 mb-3">
                                <div class="col-sm-auto">
                                    <div>
                                        <button type="button" class="btn btn-primary add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Create User</button>

                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive table-card mt-3 mb-1">
                                <table class="table align-middle table-nowrap" id="customerTable">

                                            <th class="sort" data-sort="email">SN</th>
                                            <th class="sort" data-sort="customer_name">UserName</th>
                                            <th class="sort" data-sort="phone">Email</th>
                                            <th class="sort" data-sort="status">Date Registerd</th>
                                        </tr>
                                    </thead>
                                            <tbody>
                                                @php
                                                     $count = 1;
                                                @endphp

                                                @foreach ($tasks as $user)

                                                <tr>
                                                    <td>{{ $count }}</td>
                                                    <td>{{ $user->username }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->datecreated }}</td>
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
        <!-- end row -->

        <!-- end row -->

        <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-`                                                        dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-light p-3">
                        <h5 class="modal-title" id="exampleModalLabel">Create User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                    </div>
                    <form action="{{ route('saveuser')}}" class="tablelist-form" method="Post">
                        @csrf
                        <div class="modal-body">


                            <div class="mb-3">
                                <label for="customername-field" class="form-label">User Name</label>
                                <input type="text" id="username" name="username" class="form-control" placeholder="Enter User Name" required >
                            </div>
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter Email">
                            </div>

                            <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success" id="add-btn" onclick="form_submit()">Create User</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- container-fluid -->
</div>

@endsection

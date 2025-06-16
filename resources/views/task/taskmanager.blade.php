<!DOCTYPE html>
<html lang =eng>
<title> Task Management</title>
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
                   <u> <h6 class="mb-sm-0">List of Available Books</h6></u>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Library Manager</a></li>
                            <li class="breadcrumb-item active">Books-List</li>
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
                                        <button type="button" class="btn btn-primary add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Insert Book</button>

                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive table-card mt-3 mb-1">
                                <table class="table align-middle table-nowrap" id="customerTable">

                                            <th class="sort" data-sort="email">SN</th>
                                            <th class="sort" data-sort="customer_name">ISBN</th>
                                            <th class="sort" data-sort="customer_name">Book title</th>
                                            <th class="sort" data-sort="customer_name">Author</th>
                                            <th class="sort" data-sort="phone">Category</th>
                                            <th class="sort" data-sort="phone">Price</th>
                                            <th class="sort" data-sort="customer_name">Copies</th>
                                            <th class="sort" data-sort="status">Date Created</th>
                                            <th class="sort" data-sort="action">Action</th>
                                        </tr>
                                    </thead>
                                            <tbody>
                                                @php
                                                     $count = 1;
                                                @endphp

                                                @foreach ($tasks as $task)

                                                <tr>
                                                    <td>{{ $count }}</td>
                                                    <td>{{ $task->isbn }}</td>
                                                    <td>{{ $task->book }}</td>
                                                    <td>{{ $task->author }}</td>
                                                    <td>{{ $task->category }}</td>
                                                    <td>{{ $task->price }}</td>
                                                    <td>{{ $task->copies }}</td>
                                                    <td>{{ $task->datecreated }}</td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                        <div class="edit">
                                                            <a href="{{route('edittask',$task->taskid)}}" class="btn btn-sm btn-primary edit-item-btn">Edit</a></button>
                                                        </div>
                                                        <div class="edit">
                                                            <a href="{{route('deletetask',$task->taskid)}}" class="btn btn-sm btn-danger edit-item-btn">Delete</a></button>
                                                        </div>
                                                      </td>
                                                    </tr>
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
                        <h5 class="modal-title" id="exampleModalLabel">Insert Book</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                    </div>
                    <form action="{{ route('savetask')}}" class="tablelist-form" method="Post">
                        @csrf
                        <div class="modal-body">


                            <div class="mb-3">
                                <label for="customername-field" class="form-label">ISBN</label>
                                <input type="text" id="isbn" name="isbn" class="form-control" placeholder="Enter ISBN" required >
                            </div>
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Book Title</label>
                                <input type="text" id="book" name="book" class="form-control" placeholder="Enter Book Title" required >
                            </div>
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Author</label>
                                <input type="text" id="author" name="author" class="form-control" placeholder="Enter Author" required >
                          </div>
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Category</label>
                                <input type="text" id="category" name="category" class="form-control" placeholder="Enter Category" required >
                            </div>

                            <div class="mb-3">
                                <label for="email-field" class="form-label">Price</label>
                                <input type="number" id="price" name="price" class="form-control" placeholder="Enter Price" required >
                            </div>

                            <div class="mb-3">
                                <label for="email-field" class="form-label">Copies</label>
                                <input type="text" id="copies" name="copies" class="form-control" placeholder="Enter Copies" required >
                            </div>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success" id="add-btn" onclick="form_submit()">Save Entry</button>
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

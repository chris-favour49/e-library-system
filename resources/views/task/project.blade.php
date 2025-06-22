<!DOCTYPE html>
<html lang =eng>
<title> E-library-books</title>
<link rel="shortcut icon" href=" {{ asset('steex/layouts/assets/images/favicon.ico')}}">
</html>
@extends('master')
@section('content')

@foreach ($document as $doc)
@endforeach
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
                        <u><h6 class="card-title mb-0">List of Available Books</h6></u>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div id="customerList">
                            <div class="row g-4 mb-3">
                                <div class="col-sm-auto">

                                </div>
                            </div>


                            <div class="table-responsive table-card mt-3 mb-1">
                                <table class="table align-middle table-nowrap" id="customerTable">

                                            <th class="sort" data-sort="email">SN</th>
                                            <th class="sort" data-sort="customer_name">ISBN</th>
                                            <th class="sort" data-sort="customer_name">Book title</th>
                                            <th class="sort" data-sort="customer_name">Author</th>
                                            <th class="sort" data-sort="phone">Category</th>
                                            <th class="sort" data-sort="phone">Books Uploded</th>
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
                                                    <td>{{ $task->pdf_path }}</td>
                                                    <td>{{ $task->datecreated }}</td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <div class="edit">
                                                            <a href="{{route('download',$task->taskid)}}" class="btn btn-sm btn-danger edit-item-btn" >Download</a></button>
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


    </div>
    <!-- container-fluid -->
</div>

@endsection

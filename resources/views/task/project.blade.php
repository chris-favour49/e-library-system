@extends('studentmaster')
@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- Page Title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item" ><a href="#" style="color: blue;">Student Library</a></li>
                            <li class="breadcrumb-item active" style="color: blue;"> {{ Auth::user()->name }}</li>
                        </ol>
                        <a href="{{ route('studentdashboard') }}" class="btn btn-sm btn-primary mt-2"><< Back</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Books Table -->
        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <u><h6 class="card-title mb-0">List of Available Books</h6></u>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive table-card mt-3 mb-1">
                            <table class="table align-middle table-bordered" id="customerTable">
                                <thead class="table-light">
                                    <tr>
                                        <th>SN</th>
                                        <th>ISBN</th>
                                        <th>Book Title</th>
                                        <th>Author</th>
                                        <th>Category</th>
                                        <th>Book Uploaded</th>
                                        <th>Date Created</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $count = 1; @endphp
                                    @foreach ($tasks as $task)
                                        <tr>
                                            <td>{{ $count++ }}</td>
                                            <td>{{ $task->isbn }}</td>
                                            <td>{{ $task->book }}</td>
                                            <td>{{ $task->author }}</td>
                                            <td>{{ $task->category }}</td>
                                            <td>
                                                @if($task->pdf_path)
                                                <a href="{{ route('task.view_pdf', $task->taskid) }}" class="btn btn-sm btn-primary" target="_blank" >
                                                    VIEW PDF
                                                </a>
                                                @else
                                                    No file
                                                @endif
                                            </td>
                                            <td>{{ \Carbon\Carbon::parse($task->datecreated)->format('d M Y') }}</td>
                                            <td>
                                                <a href="{{ route('download', $task->taskid) }}" class="btn btn-sm btn-success">
                                                    Download
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> <!-- .table-responsive -->
                    </div> <!-- .card-body -->
                </div> <!-- .card -->
            </div> <!-- .col -->
        </div> <!-- .row -->

    </div>
</div>

@endsection


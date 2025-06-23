@extends('master')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        {{-- Flash Messages --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        @if(session('danger'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> {{ session('danger') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <!-- Page Title -->
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center mb-2">
                <h6><u>List of Available Books</u></h6>
                <a href="{{ route('dashboard') }}" class="btn btn-sm btn-primary"><< Back</a>
            </div>
        </div>

        <!-- Insert Button -->
        <div class="mb-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#showModal">
                <i class="ri-add-line me-1"></i> Insert Book
            </button>
        </div>

        <!-- Book Table -->
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>ISBN</th>
                        <th>Book Title</th>
                        <th>Author</th>
                        <th>Category</th>
                        <th>File</th>
                        <th>Date Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php $count = 1; @endphp
                    @foreach($tasks as $task)
                        <tr>
                            <td>{{ $count++ }}</td>
                            <td>{{ $task->isbn }}</td>
                            <td>{{ $task->book }}</td>
                            <td>{{ $task->author }}</td>
                            <td>{{ $task->category }}</td>
                            <td>
                                @if($task->pdf_path)
                                    <a href="{{ asset('storage/' . $task->pdf_path) }}" target="_blank">Download</a>
                                @else
                                    No File
                                @endif
                            </td>
                            <td>{{ \Carbon\Carbon::parse($task->datecreated)->format('d M Y') }}</td>
                            <td>
                                <a href="{{ route('edittask', $task->taskid) }}" class="btn btn-sm btn-primary">Edit</a>
                                <a href="{{ route('deletetask', $task->taskid) }}" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Modal for Insert Book -->
        <div class="modal fade" id="showModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form action="{{ route('savetask') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header bg-light">
                            <h5 class="modal-title">Insert Book</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label>ISBN</label>
                                <input type="text" name="isbn" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Book Title</label>
                                <input type="text" name="book" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Author</label>
                                <input type="text" name="author" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Category</label>
                                <select name="category" class="form-control" required>
                                    <option value="">Select Category</option>
                                    <option>Computer Science</option>
                                    <option>Mathematics</option>
                                    <option>Statistics</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>PDF File</label>
                                <input type="file" name="pdf_path" class="form-control" accept="application/pdf" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save Entry</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

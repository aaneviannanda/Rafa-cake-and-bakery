@extends('layout.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    <h3 class="text-center mb-4">Category</h3>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Categories</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <div class="row no-gutters">
                    <div class="col-12">
                        <div class="d-flex justify-content-end mb-3">
                            <a href="#" data-toggle="modal" data-target="#add__category" class="btn btn-info btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text">Add Data Category</span>
                            </a>
                        </div>
                    </div>
                </div>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @php
                    $no = 0;
                @endphp
                @foreach($categories as $category)
                    @php $no++; @endphp
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $category->name}}</td>
                        <td>
                            <button data-toggle="modal" data-target="#edit__category_{{ $category->id }}" class="btn btn-warning">Edit</button>
                            <form method="POST" action="{{ route('delete_category', ['id' => $category->id]) }}">
                            @csrf
                                <button type = "submit" class="btn btn-danger">{{ __('Hapus') }}</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <!-- Modal Untuk Add Data Product-->
            <div class="modal fade" id="add__category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Data Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('insert_category'); }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input name="name" type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter category name" >
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Untuk Edit  -->
            @foreach($categories as $category)
            <div class="modal fade " id="edit__category_{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Data Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('update_category', ['id' => $category->id]) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">NAME</label>
                                    <input name="name" type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter Name" value="{{ $category->name }}">
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

@endsection

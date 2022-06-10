@extends('layout.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    <h3 class="text-center mb-4">Products</h3>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Products</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <div class="row no-gutters">
                    <div class="col-12">
                        <div class="d-flex justify-content-end mb-3">
                            <a href="#" data-toggle="modal" data-target="#add__product" class="btn btn-info btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text">Add Data Product</span>
                            </a>
                        </div>
                    </div>
                </div>
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th>Category</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Link img</th>
                        <th>Rating</th>
                        <th>Description</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                @php $no = 0; @endphp
                @foreach($products as $product)
                    @php $no++; @endphp
                    <tr>
                        <td class="text-center">{{ $no }}</td>
                        <td>{{ $product->categories->name }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->link_img }}</td>
                        <td>{{ $product->rating }}</td>
                        <td>{{ $product->description }}</td>
                        <td class="text-center">
                            <button data-toggle="modal" data-target="#edit__product_{{ $product->id }}" class="btn btn-sm btn-warning">Edit</button>
                            <form method="POST" action="{{ route('delete_product', ['id' => $product->id]) }}" enctype="multipart/form-data">
                                @csrf
                                <button type = "submit" class="btn btn-sm btn-danger">{{ __('Hapus') }}</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <!-- Modal Untuk Add Data Product-->
            <div class="modal fade" id="add__product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Data Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('insert_product') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <label for="name">Category</label>
                                <select class="custom-select custom-select-sm mb-2" name="category_id">
                                    <option selected>Pilih Category</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input name="name" type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter Name" >
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input name="price" type="text" class="form-control" id="price" placeholder="Enter Price">
                                </div>
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    {{-- <input name="description" type="text" class="form-control" id="description" placeholder="Enter Link img"> --}}
                                    <input name="image" type="file" class="form-control" id="image">
                                </div>
                                <div class="form-group">
                                    <label for="rating">Rating</label>
                                    <input name="rating" type="text" class="form-control" id="rating" placeholder="Enter Rating">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input name="description" type="text" class="form-control" id="description" placeholder="Enter Description">
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Untuk Edit Data Product-->
            @foreach($products as $product)
            <div class="modal fade" id="edit__product_{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Data Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('update_product', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <label for="name">Category</label>
                                <select class="custom-select custom-select-sm mb-2" name="category_id">
                                    <option selected>Pilih Category</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $product->category_id }}" selected>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input name="name" type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter Name" value="{{ $product->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input name="price" type="text" class="form-control" id="price" placeholder="Enter Price" value="{{ $product->price }}">
                                </div>
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input name="image" type="file" class="form-control" id="image">
                                </div>
                                <div class="form-group">
                                    <label for="rating">Rating</label>
                                    <input name="rating" type="text" class="form-control" id="rating" placeholder="Enter Rating" value="{{ $product->rating }}">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input name="description" type="text" class="form-control" id="description" placeholder="Enter Description" value="{{ $product->description }}">
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

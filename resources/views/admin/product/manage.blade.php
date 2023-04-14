@extends('admin.master')

@section('title')
    Admin | Manage Product
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="text-center">All Product Info</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sl No.</th>
                                <th>Category Name</th>
                                <th>Product Name</th>
                                <th>Code</th>
                                <th>Selling Price</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->code }}</td>
                                    <td>{{ $product->selling_price }}</td>
                                    <td><img src="{{ $product->image }}" alt="" height="70" width="70"/></td>
                                    <td>{{ $product->status == 1 ? 'published' : 'unpublished' }}</td>
                                    <td>
                                        <a href="{{ route('edit.product', ['id' => $product->id]) }}" class="btn btn-success btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection

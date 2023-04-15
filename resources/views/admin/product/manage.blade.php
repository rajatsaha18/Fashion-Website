@extends('admin.master')

@section('title')
    Admin | Manage Product
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
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
                                        <a href="{{ route('detail.product', ['id' => $product->id]) }}" class="btn btn-info btn-sm">
                                            <i class="fa fa-book"></i>
                                        </a>
                                        <a href="{{ route('edit.product', ['id' => $product->id]) }}" class="btn btn-success btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{ route('delete.product', ['id' => $product->id]) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure delete this')">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <section class="py-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 mx-auto">
                                    {{ $products->links() }}
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection

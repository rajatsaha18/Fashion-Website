@extends('admin.master')

@section('title')
Admin | Detail Product
@endsection

@section('body')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h5 class="text-center">Product Detail Info</h5>
                <table class="table table-bordered">
                    <tr>
                        <th>Product Id</th>
                        <td>{{ $product->id }}</td>
                    </tr>
                    <tr>
                        <th>Product Category</th>
                        <td>{{ $product->category->name }}</td>
                    </tr>
                    <tr>
                        <th>Product Name</th>
                        <td>{{ $product->name }}</td>
                    </tr>
                    <tr>
                        <th>Product Code</th>
                        <td>{{ $product->code }}</td>
                    </tr>
                    <tr>
                        <th>Product Regular Price</th>
                        <td>{{ $product->regular_price }}</td>
                    </tr>
                    <tr>
                        <th>Product Selling Price</th>
                        <td>{{ $product->selling_price }}</td>
                    </tr>
                    <tr>
                        <th>Product Stock Amount</th>
                        <td>{{ $product->stock_amount }}</td>
                    </tr>
                    <tr>
                        <th>Product Description</th>
                        <td>{{ $product->description }}</td>
                    </tr>
                    <tr>
                        <th>Product Image</th>
                        <td>
                            <img src="{{ asset($product->image) }}" alt="" height="70" width="70"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Product Status</th>
                        <td>{{ $product->status == 1 ? 'published' : 'unpublished' }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection

@extends('admin.master')

@section('title')
    Admin | Edit Product
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <h5 class="text-center">Edit Product Form</h5>
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <form action="{{ route('update.product', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Category Name</label>
                                <div class="col-sm-10 mt-2">
                                    <select class="form-control" name="category_id" required>
                                        <option value="" disabled selected>{{ $product->category->name }}</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Product Name</label>
                                <div class="col-sm-10 mt-1">
                                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Product Code</label>
                                <div class="col-sm-10 mt-1">
                                    <input type="text" name="code" value="{{ $product->code }}" class="form-control" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Regular Price</label>
                                <div class="col-sm-10 mt-1">
                                    <input type="text" name="regular_price" value="{{ $product->regular_price }}" class="form-control" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Selling Price</label>
                                <div class="col-sm-10 mt-1">
                                    <input type="text" name="selling_price" value="{{ $product->selling_price }}" class="form-control" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Stock Amount</label>
                                <div class="col-sm-10 mt-1">
                                    <input type="text" name="stock_amount" value="{{ $product->stock_amount }}" class="form-control" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="description">{{ $product->description }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10 mt-1">
                                    <input type="file" name="image" class="form-control-file" />
                                    <img src="{{ asset($product->image) }}" alt="" height="70" width="70"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10 mt-2">
                                    <label for=""><input type="radio" name="status" {{ $product->status == 1 ? 'checked' : '' }} value="1"
                                            checked />Published</label>
                                    <label for=""><input type="radio" name="status" {{ $product->status == 0 ? 'checked' : '' }}
                                            value="0" />Unpublished</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <input type="submit" class="btn btn-success" value="Update Product" />
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

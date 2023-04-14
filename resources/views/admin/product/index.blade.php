@extends('admin.master')

@section('title')
    Admin | Add Product
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <h5 class="text-center">Add Product Form</h5>
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <form action="{{ route('new.product') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Category Name</label>
                                <div class="col-sm-10 mt-2">
                                    <select class="form-control" name="category_id" required>
                                        <option value="" disabled selected>--select category--</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>

                                        @endforeach
                                    </select>
                                    <span class="text-danger">{{ $errors->has('category_id') ? $errors->first('category_id') : '' }}</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Product Name</label>
                                <div class="col-sm-10 mt-1">
                                    <input type="text" name="name" class="form-control" />
                                    <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Product Code</label>
                                <div class="col-sm-10 mt-1">
                                    <input type="text" name="code" class="form-control" />
                                    <span class="text-danger">{{ $errors->has('code') ? $errors->first('code') : '' }}</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Regular Price</label>
                                <div class="col-sm-10 mt-1">
                                    <input type="text" name="regular_price" class="form-control" />
                                    <span class="text-danger">{{ $errors->has('regular_price') ? $errors->first('regular_price') : '' }}</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Selling Price</label>
                                <div class="col-sm-10 mt-1">
                                    <input type="text" name="selling_price" class="form-control" />
                                    <span class="text-danger">{{ $errors->has('selling_price') ? $errors->first('selling_price') : '' }}</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Stock Amount</label>
                                <div class="col-sm-10 mt-1">
                                    <input type="text" name="stock_amount" class="form-control" />
                                    <span class="text-danger">{{ $errors->has('stock_amount') ? $errors->first('stock_amount') : '' }}</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="description"></textarea>
                                    <span class="text-danger">{{ $errors->has('description') ? $errors->first('description') : '' }}</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10 mt-1">
                                    <input type="file" name="image" class="form-control-file" />
                                    <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10 mt-2">
                                    <label for=""><input type="radio" name="status" value="1"
                                            checked />Published</label>
                                    <label for=""><input type="radio" name="status"
                                            value="0" />Unpublished</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <input type="submit" class="btn btn-success" value="Create New Product" />
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

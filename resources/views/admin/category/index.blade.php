@extends('admin.master')

@section('title')
    Admin | Add Category
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <h5 class="text-center">Add Category Form</h5>
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <form action="{{ route('new.category') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Category Name</label>
                                <div class="col-sm-10 mt-2">
                                    <input type="text" name="name" class="form-control" id="inputEmail3">
                                    <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                                </div>

                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="description"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10 mt-1">
                                    <input type="file" name="image" class="form-control-file"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10 mt-2">
                                    <label for=""><input type="radio" name="status" value="1" checked/>Published</label>
                                    <label for=""><input type="radio" name="status" value="0"/>Unpublished</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <input type="submit" class="btn btn-success" value="Create New Category"/>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

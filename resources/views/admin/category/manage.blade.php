@extends('admin.master')

@section('title')
Admin | Manage Category
@endsection

@section('body')
<section class="py-5">
    <div class="container">
        <div class="row">
            <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
            <h5 class="text-center">All Category Info</h5>
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Sl No.</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $category->name }}</td>
                            <td><img src="{{ asset($category->image) }}" alt="" height="70" width="70"></td>
                            <td>{{ $category->status == 1 ? 'published' : 'unpublished'}}</td>
                            <td>
                                <a href="{{ route('edit.category',['id' => $category->id]) }}" class="btn btn-success btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{ route('delete.category',['id' => $category->id]) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this')">
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

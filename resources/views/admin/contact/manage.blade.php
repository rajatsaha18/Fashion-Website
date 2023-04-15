@extends('admin.master')

@section('title')
    Admin | Manage Contact
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
                    <h5 class="text-center">All Contact Info</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Contact No.</th>
                                <th>User Name</th>
                                <th>User Email</th>
                                <th>User Mobile</th>
                                <th>Address</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contactInfo as $contact)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->mobile }}</td>
                                    <td>{{ $contact->address }}</td>
                                    <td>{{ $contact->message }}</td>
                                    <td>
                                        <a href="mailto:{{ $contact->email }}" target="blank" class="btn btn-info btn-sm">
                                            <i class="fa-solid fa-envelope"></i>
                                        </a>
                                        <a href="{{ route('delete.contact',['id' => $contact->id]) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are You sure delete this')">
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

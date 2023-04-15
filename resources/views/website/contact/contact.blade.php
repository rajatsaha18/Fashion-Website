@extends('website.master')

@section('title')
Contact
@endsection

@section('body')
<section class="py-5 bg-secondary">
    <div class="container">
        <div class="row">
            <h4 class="text-center text-info">{{ Session::get('message') }}</h4>
            <h3 class="text-warning text-center">Contact Form</h3>
            <div class="col-md-4 mx-auto">
                <div class="card bg-danger">
                    <div class="card-body">
                        <form action="{{ route('new.contact') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Full Name</label>
                                <input type="text" class="form-control" name="name"
                                    placeholder="Rajat Saha" />
                                <span class="text-white">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email"
                                    placeholder="rajat@gmail.com" />
                                <span class="text-white">{{ $errors->has('email') ? $errors->first('email') : '' }}</span>
                            </div>
                            <div class="form-group">
                                <label for="">Mobile</label>
                                <input type="number" class="form-control" name="mobile"
                                    placeholder="01717440651" />
                                <span class="text-white">{{ $errors->has('mobile') ? $errors->first('mobile') : '' }}</span>
                            </div>
                            <div class="form-group">
                                <label for="">Address</label>
                                <input type="text" class="form-control" name="address"
                                    placeholder="Dhanmondi, Dhaka" />
                            </div>
                            <div class="form-group">
                                <label for="">Message</label>
                                <textarea class="form-control" name="message"></textarea>
                            </div>
                            <div class="form-group mt-2">
                                <label for=""></label>
                                <input type="submit" class="btn btn-success" value="Submit" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

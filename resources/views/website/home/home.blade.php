@extends('website.master')

@section('title')
    Home Page
@endsection

@section('body')
    <!--About Section Start-->

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <h1 class="text-center mb-3">About Us</h1>
                <div class="col-md-6">
                    <div class="card card-body">
                        <img src="{{ asset('images/about.jpg') }}" alt="" height="300" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body">
                        <h3>About Us</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam modi, blanditiis quis,
                            dolores error sint accusamus exercitationem veritatis itaque quod sed illo nesciunt
                            asperiores voluptates labore vero quam vel impedit?
                        </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam modi, blanditiis quis,
                            dolores error sint accusamus exercitationem veritatis itaque quod sed illo nesciunt
                            dolores error sint accusamus
                        </p>

                    </div>
                    <a href="{{ route('about') }}" class="btn btn-outline-success mt-2">About Us</a>
                </div>

            </div>
        </div>
    </section>

    <!--About Section End-->

    <!--Produts Section Start-->

    <section class="py-5">
        <div class="container">
            <h1 class="text-center mb-3">Our Products</h1>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-3">
                        <div class="card">
                            <img src="{{ asset($product->image) }}" alt="" class="card-img-top w-100" />
                            <div class="card-body">
                                <h5>{{ $product->name }}</h5>
                                <h5>TK.{{ $product->selling_price }}</h5>
                                <a href="" class="btn btn-success">Details</a>
                            </div>
                        </div>

                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!--Products Section End-->

    <!--Contact Section Start-->

    <section class="py-5 bg-secondary">
        <div class="container">
            <div class="row">
                <h3 class="text-warning text-center">Contact Form</h3>
                <div class="col-md-4 mx-auto">
                    <div class="card bg-danger">
                        <div class="card-body">
                            <form action="" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Full Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Rajat Saha" />
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" name="email"
                                        placeholder="rajat@gmail.com" />
                                </div>
                                <div class="form-group">
                                    <label for="">Mobile</label>
                                    <input type="number" class="form-control" name="mobile" placeholder="01717440651" />
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
    <!--Contact Section End-->

    <!--Booking Section Start-->

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-5">
                    <h1 class="mb-5">Let Fashion Store take your business to new heights</h1>
                    <p>
                        Get a personalized walk-through of the fashion store platform
                    </p>
                    <p>
                        Learn how fashion store features will enhance your business
                    </p>
                    <p>
                        Get a chance to ask all your software related questions
                    </p>

                </div>
                <div class="col-md-6">
                    <div class="card card-body bg-light">
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="col-12">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" />
                            </div>
                            <div class="col-12">
                                <label class="form-label">Mobile</label>
                                <input type="number" class="form-control" />
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">City</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="col-md-4">
                                <label for="inputState" class="form-label">State</label>
                                <select id="inputState" class="form-select">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="inputZip" class="form-label">Zip</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Check me out
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Book Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Booking Section Start-->
@endsection

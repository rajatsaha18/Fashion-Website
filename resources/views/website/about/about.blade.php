@extends('website.master')

@section('title')
About
@endsection

@section('body')
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
@endsection

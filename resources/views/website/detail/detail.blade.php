@extends('website.master')

@section('title')
    Website | Category
@endsection

@section('body')
    <section class="py-5 bg-secondary">
        <div class="row">
            <h1 class="text-center text-white py-5">Detail Page</h1>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body">
                        <img src="{{ asset($product->image) }}" alt="" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body">
                        <h2>{{ $product->name }}</h2>
                        <h5>TK.{{ $product->selling_price }}</h5>
                        <h5>Description</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid perferendis tempore qui sint
                            suscipit magni, excepturi dicta ex quas ipsa, similique nemo. Aspernatur quis reprehenderit
                            corporis quas quam laboriosam vitae.
                        </p>
                        <div class="col-md-4">
                            <p>Product Quantity</p>
                            <input type="number">
                            <button type="button" class="btn btn-success mt-2">Add To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

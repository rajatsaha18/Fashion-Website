@extends('website.master')

@section('title')
    Website | Category
@endsection

@section('body')
    <section class="py-5 bg-secondary">
        <div class="row">
            <h1 class="text-center text-white py-5">{{ $category->name }}</h1>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-3">
                        <div class="card">
                            <img src="{{ asset($product->image) }}" alt="" class="h-250"/>
                            <div class="card-body">
                                <h5>{{ $product->name }}</h5>
                                <h5>{{ $product->selling_price }}</h5>
                            </div>
                            <a href="{{ route('detail',['id' => $product->id]) }}" class="btn btn-success btn-block">Details</a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection

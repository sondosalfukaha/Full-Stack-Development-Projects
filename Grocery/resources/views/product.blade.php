@extends('Layouts.master')

@section("content")
<!-- product section -->
<div class="product-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">أفسام</span> الموقع</h3>
                    <p>
                        متعة التسوق عبر فروعنا
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($products as $item)
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="http://localhost/Laravel%20First%20Project/public/product">
                                <img src="{{url($item->imagepath)}}"
                                    alt="" style="max-height:250px;min-height:250px;">
                            </a>
                        </div>
                        <h3>{{ $item->name }}</h3>
                        <p class="product-price"><span>{{$item->quantity}}</span>{{$item->price}} $</p>
                        <p>{{ $item->description }}</p>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</div>
<!-- end product section -->
@endsection

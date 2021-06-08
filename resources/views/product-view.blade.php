@extends('layout')

@section('title')
{{ $product->title }}
@endsection

@section('main_content_block')

<div class="product-view-block">
    <div class="row align-items-center">
        <div class="col-lg-6 product-view-image-block">
            <img src="{{ Storage::url($product->image) }}" alt="">
        </div>
        <div class="col-lg-6 product-view-text-block">
            <h2 class="product-view-block-title">{{ $product->title }}</h2>
            <p class="product-view-block-article">Код товара: {{ $product->article }}</p>
            @if ($product->description)
            <p class="product-view-block-description"><b>Описание товара:</b><br>{{ $product->description }}</p>
            @endif
            <div class="product-view-block-contact-links-container">
                <h3>Contactați-ne în orice mod convenabil pentru dvs.</h3>
                <div class="product-view-contact-links-block">
                    <a href="" class="icon-link-phone"><i class="fas fa-phone"></i></a>
                    <a href="" class="icon-link-viber"><i class="fab fa-viber"></i></a>
                    <a href="" class="icon-link-whatsapp"><i class="fab fa-whatsapp"></i></a>
                    <a href="" class="icon-link-facebook"><i class="fab fa-facebook"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@extends('layout')

@section('title')
Catalog de Produse
@endsection

@section('main_content_block')

<div class="catalog-block">
    <h2 class="block-header">Catalog de Produse</h2>
    <div class="catalog-block-grid-box">
        @foreach ($products as $product)
        <div class="recommended-product-card">
            <div class="recommended-product-card-image-block">
                <a href="/product/{{ $product->id }}"><img src="{{ Storage::url($product->image) }}" alt=""></a>
            </div>
            <div class="recommended-product-card-text-block">
                <p class="recommended-product-card-name"><a href="/product/{{ $product->id }}">{{ $product->title }}</a></p>
                <p class="recommended-product-card-articul">{{ $product->article }}</p>
            </div>
            <div class="recommended-product-card-button">
                <a href="/product/{{ $product->id }}">Cumpără</a>
            </div>
        </div>
        @endforeach
    </div>
    {{ $products->links('pagination.paginate') }}
</div>

@endsection

@extends('layout')

@section('title')
    Home
@endsection

@section('main_content_block')

    <div id="firstBlockCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/first-block-image-1.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="/img/first-block-image-2.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="/img/first-block-image-3.jpg" class="d-block w-100" alt="">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#firstBlockCarousel"  data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#firstBlockCarousel"  data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
        </button>
    </div>

    <div class="despre-noi-block" id="despre-noi">
        <h2 class="block-header">Despre Noi</h2>
        <div class="row align-items-center">
            <div class="col-lg-6 despre-noi-text-container">
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.<br>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?<br>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
            </div>
            <div class="col-lg-6 despre-noi-image-container">
                <img src="/img/despre-noi-block-image.png" alt="">
            </div>
        </div>
    </div>

    <div class="recommended-block" id="produse-recomandate">
        <h2 class="block-header">Produse Recomandate</h2>
        <div class="recomended-block-grid-box">
            @foreach ($recommend_products as $product)
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
    </div>

    <div class="advantages-block" id="avantajele-noastre">
        <h2 class="block-header">Avantajele noastre</h2>
        <div class="row align-items-center advantages-container">
            <div class="col-lg-3 advantages-item">
                <div class="row align-items-center">
                    <div class="col-lg-3 advantages-item-image">
                        <img src="img/advantages-image-1.png" alt="">
                    </div>
                    <div class="col-lg-9 advantages-item-text">
                        <p>Lucram cu pietre naturale și artificial</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 advantages-item">
                <div class="row align-items-center">
                    <div class="col-lg-3 advantages-item-image">
                        <img src="img/advantages-image-2.png" alt="">
                    </div>
                    <div class="col-lg-9 advantages-item-text">
                        <p>10 ani garanție la materiale (2 ani garanție de muncă)</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 advantages-item">
                <div class="row align-items-center">
                    <div class="col-lg-3 advantages-item-image">
                        <img src="img/advantages-image-3.png" alt="">
                    </div>
                    <div class="col-lg-9 advantages-item-text">
                        <p>62% dintre clienți provin din recomandările prietenilor și ai familiei</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 advantages-item">
                <div class="row align-items-center">
                    <div class="col-lg-3 advantages-item-image">
                        <img src="img/advantages-image-4.png" alt="">
                    </div>
                    <div class="col-lg-9 advantages-item-text">
                        <p>Selectăm materiale de înaltă calitate pentru toată gama de produse</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-block" id="contacte">
        <h2 class="block-header">Contactează-ne!</h2>
        <div class="contact-links-container">
            <a href="" class="border-icon-link-phone icon-link-phone"><i class="fas fa-phone"></i> +07512345678</a>
            <a href="" class="border-icon-link-viber icon-link-viber"><i class="fab fa-viber"></i> Viber</a>
            <a href="" class="border-icon-link-whatsapp icon-link-whatsapp"><i class="fab fa-whatsapp"></i> WhatsApp</a>
            <a href="" class="border-icon-link-facebook icon-link-facebook"><i class="fab fa-facebook"></i> Facebook</a>
        </div>
    </div>

@endsection

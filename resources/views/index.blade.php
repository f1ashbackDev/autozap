@extends('layouts.header')
@section('content')
    <section>
        <div class="container">
            <div class="banner">
                <img src="{{ url(asset('img/test.jpg')) }}">
            </div>
            <div class="block-info">
                <div class="block-flex_item">
                    <div class="benefits_img">
                        <img src="{{ url(asset('img/smail/block1.svg')) }}">
                    </div>
                    <div class="benefits_text">
                        <div>
                            100% Оригинальная продукция
                        </div>
                        от производителя
                    </div>
                </div>
                <div class="block-flex_item">
                    <div class="benefits_img">
                        <img src="{{ url(asset('img/smail/block2.svg')) }}">
                    </div>
                    <div class="benefits_text">
                        <div>
                            Бесплатная доставка
                        </div>
                        по всему миру
                    </div>
                </div>
                <div class="block-flex_item">
                    <div class="benefits_img">
                        <img src="{{ url(asset('img/smail/block3.svg')) }}">
                    </div>
                    <div class="benefits_text">
                        <div>
                            Скидки и подарки
                        </div>
                        нашим клиентам
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container text-center">
            <h3 class="mb-4">Категории</h3>
            <div class="catalogs">
                @if(count($category))
                    @foreach($category as $category_item)
                        <div>
                            <div class="catalog">
                                <div>
                                    <a href="{{ route('category.show', [$category_item]) }}">
                                        <img src="{{ asset('/storage/'. $category_item->image) }}">
                                    </a>
                                </div>
                                <div>
                                    <a href="{{ route('category.show', [$category_item]) }}">{{$category_item->categories_name}}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="text-center">На данный момент категорий нет на сайте</p>
                @endif
            </div>
        </div>
        <div>
            <a href="{{ route('category') }}" style="padding: 8px 10px; display: block; border-radius: 5px; color: #333; margin: 2px auto 0; width: max-content">Все категории</a>
        </div>
    </section>
    <section>
        <div class="container text-center" style="margin-bottom: 50px;">
            <h3>Товары</h3>
            <div class="alert alert-primary notifOff" role="alert" id="alert">
                Товар добавлен в корзину
            </div>
            @if(count($products))
                <div class="products">
                    @foreach($products as $product_item)
                        <div class="product-row">
                            <div class="product_card">
                                <div class="product_img">
                                    <a href="{{ route('products.show', $product_item) }}">
                                        <img src="{{ asset('/storage/'. $product_item->image[0]->image)}}" width="360px" height="360px">
                                    </a>
                                </div>
                                <div class="product_body">
                                    <a class="text-decoration-none" href="{{ route('products.show', $product_item) }}"><h4>{{$product_item->name}}</h4></a>
                                    @if($product_item->count > 0)
                                        <p style="color: #5fa800">В наличии</p>
                                        <p style="padding: 10px 0">{{$product_item->price}}</p>
                                        <div class="product_footer">
                                            <div>
                                                <button class="product_card_buttons" onclick="downSizeProductInput({{$product_item->id}})">-</button>
                                                <input placeholder="1" class="product_card_ammount" id="product-input-{{$product_item->id}}" value="1">
                                                <button class="product_card_buttons" onclick="addProductInput({{$product_item->id}})">+</button>
                                            </div>
                                            <a class="addCard" onclick="sendServerAddProduct({{$product_item->id}})">
                                                В корзину
                                            </a>
                                        </div>
                                    @else
                                        <p style="color: #e34545">Нет в наличии</p>
                                        <p style="padding: 10px 0">{{$product_item->price}}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div style="margin-bottom: 50px;">
                    <a href="{{ route('products') }}" style="text-decoration: none; padding: 8px 10px; display: block; border-radius: 5px; color: #333; margin: 10px auto 0; width: max-content">Все товары</a>
                </div>
            @else
                <p>Товаров нет</p>
            @endif
        </div>
    </section>
@endsection

@extends('layouts.header')
@section('content')
    <section>
        <div class="container">
            <h3 class="mb-4">{{ $category_name }}</h3>
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
                <div class="d-flex justify-content-center align-items-center mt-3">
                    <ul class="pagination">
                        {{$products->links()}}
                    </ul>
                </div>
            @endif
        </div>
    </section>
@endsection

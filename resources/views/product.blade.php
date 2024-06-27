@extends('layouts.header')
@section('content')
    <section style="margin-bottom: 50px;">
        <div class="container">
            <h1>Товар: {{$product->name}}</h1>
            <div class="alert alert-primary notifOff" role="alert" id="alert">
                Товар добавлен в корзину
            </div>
            <div class="product_row">
                <div class="product_row_1">
                    <div>
                        <div>
                            @foreach($image as $item)
                                <img src="{{  asset('/storage/' . $item->image)  }}" id="imageSrc">
                                @break
                            @endforeach
                        </div>
                        <div style="display: flex; justify-content: center">
                            @foreach($image as $item)
                                <div class="product_images">
                                    <img src="{{  asset('/storage/' . $item->image)  }}" id="{{$item->id}}" onclick="test({{$item->id}})">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div>
                        <div>
                            <p style="margin: 0 0 0 10px; font-size: 14px; color: #333333">{{ $product->description }}</p>
                            <p style="margin-bottom: 12px; font-size: 14px; color: #333333">Производитель</p>
                        </div>
                    </div>
                </div>
                <div class="product_row_2">
                    @if($product->count > 0)
                        <div class="product_inform">
                            <p style="color: #5fa800">В наличии</p>
                            <p class="product_inform_price">{{ $product->price }} рублей</p>
                            @if(\Illuminate\Support\Facades\Auth::user())
                                <div class="product_inform_add_product">
                                    <div class="product_inform_input">
                                        <button class="product_card_buttons" onclick="downSizeProductInput({{$product->id}})">-</button>
                                        <input placeholder="1" class="product_card_ammount" id="product-input-{{$product->id}}" value="1">
                                        <button class="product_card_buttons" onclick="addProductInput({{$product->id}})">+</button>
                                    </div>
                                    <a class="addCard" onclick="sendServerAddProduct({{$product->id}})">
                                        В корзину
                                    </a>
                                </div>
                            @else
                                <div class="product_auth_user">
                                    <p>Авторизуйтесь</p>
                                </div>
                            @endif

                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection

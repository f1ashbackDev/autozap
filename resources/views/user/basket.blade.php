@extends('layouts.header')
@section('content')
    <div class="container" style="margin-bottom: 50px">
        <h2 style="margin-bottom: 30px; font-size: 36px">Корзина</h2>
        @if(count($basket))
            <div class="basket-rows">
                <div class = "basket">
                    @foreach($basket as $item)
                        <div class="basket_card">
                            <div style="width: 13%">
                                @foreach($item->productImage as $image)
                                    <img src="{{ asset('/storage/' . $image->image) }}" style="display: block; max-width: 100%; height: auto">
                                    @break
                                @endforeach
                            </div>
                            @foreach($item->product as $product)
                                <div style="width: 47%">
                                    <p style="font-weight: 500; color: #000;">{{ $product->name }}</p>
                                </div>
                                <div style="width: 15%; text-align: center">
                                    <div style="
                                            display: flex;
                                            position: relative;
                                            text-align: center;
                                            background: rgba(25, 118, 210, .1);
                                            border-radius: 5px;
                                            flex: 1;
                                            height: 38px;
                                            margin-bottom: 5px;">
                                        <button class="product_card_buttons" onclick="downSizeProductInputBasket({{$product->id}})">-</button>
                                        <input placeholder="1" class="product_card_ammount" id="product-input-{{$product->id}}" value="{{ $item->count }}">
                                        <button class="product_card_buttons" onclick="addProductInputBasket({{$product->id}})">+</button>
                                    </div>
                                    <p id="product-{{$item->id}}" style="font-weight: 400">{{ $product->price  }}</p>
                                </div>
                            @endforeach
                            <div style="width: 25%; text-align: right">
                                <p id="result-{{$item->id}}" style="font-weight: 400">{{ $item->product_sum }}</p>
                                <a href="{{ route('basket.delete', $item) }}">Удалить товар</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="basket_information">
                   <div style="padding: 15px 18px;
                   background-color: rgba(255,255,255, 1)">
                       <h4 style="border-bottom: 1px solid rgba(0,0,0, .05);
                       margin-bottom: 15px;
                       padding: 0 18px 15px 18px;
                       margin-left: -18px;
                       margin-right: -18px;
                       font-size: 20px">Ваш заказ</h4>
                       <a href="{{ route('order.store') }}">Оформить</a>
                   </div>
                </div>
            </div>
        @else
            <p>Корзина пустая. <a href="{{ route('products') }}">Перейти к покупкам.</a></p>
        @endif
    </div>
@endsection
@section('js-scripts')
    <script type="text/javascript">
        let csrf_token = document.head.querySelector('meta[name="csrf-token"]')
        const add = (id) => {
            const input = document.getElementById(id);
            const productSum = document.getElementById(`product-${id}`);
            const resultSum = document.getElementById(`result-${id}`);
            input.value++;
            resultSum.textContent = productSum.textContent * input.value;
            return fetch(`basket/${id}/update`,{
                        method: 'post',
                        body: JSON.stringify({
                            count: input.value
                        }),
                        headers: {
                            'Content-Type': 'application/json',
                            "X-CSRF-Token": csrf_token.content
                        }
                    }).then(
                        response => {
                        }
                    ).catch(
                        error => console.log(error)
                    )
        }
        const remove = (id) => {
            const input = document.getElementById(id);
            const productSum = document.getElementById(`product-${id}`);
            const resultSum = document.getElementById(`result-${id}`);
            console.log(id)
            if(input.value > 0){
                input.value--;
                resultSum.textContent = productSum.textContent * input.value;
                return fetch(`basket/${id}/update`,{
                    method: 'post',
                    body: JSON.stringify({
                        count: input.value
                    }),
                    headers: {
                        'Content-Type': 'application/json',
                        "X-CSRF-Token": csrf_token.content
                    }
                }).then(
                    response => {
                    }
                ).catch(
                    error => console.log(error)
                )
            }
        }
    </script>
@endsection

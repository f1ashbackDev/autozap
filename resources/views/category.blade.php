@extends('layouts.header')
@section('content')
    <section style="margin-bottom: 50px;">
        <div class="container">
            <h3 class="mb-3">Каталог</h3>
            <div class="catalogs">
                @if(count($category))
                    @foreach($category as $category_item)
                        <div>
                            <div class="catalog">
                                <div>
                                    <a href="{{ route('category.show', $category_item) }}">
                                        <img src="{{ asset('/storage/'. $category_item->image) }}">
                                    </a>
                                </div>
                                <div style="padding-top: 15px">
                                    <a href="{{ route('category.show', $category_item) }}">{{$category_item->categories_name}}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>На данный момент категорий нет на сайте</p>
                @endif
            </div>
        </div>
    </section>
@endsection

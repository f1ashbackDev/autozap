@extends('layouts.header')
@section('content')
    <div class="container">
        <div class="m-5">
            <table>
                <thead>
                <tr>
                    <th>Номер заказа</th>
                    <th>Статус заказа</th>
                    <th>Действие</th>
                </tr>
                </thead>
                <tbody>
                @foreach($order as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->status }}</td>
                        <td><a href="{{ route('order.item.store', $item->id) }}">Просмотреть заказ</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

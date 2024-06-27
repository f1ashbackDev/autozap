@extends('layouts.header')
@section('content')
    <section style="margin-bottom: 50px;">
        <div class="container">
            <h3 style="text-align: center">Связаться с нами</h3>
        </div>
        <div class="container" style="margin-bottom: 15px">
            <p>Телефоны</p>
            <p>+7(953)387-11-14</p>
            <p>+7(953)387-11-14</p>
            <p>Часы работы</p>
            <p>Пн - Вс: 10:00 - 20:00</p>
            <p>Электронная почта</p>
            <p>info@autozap.ru</p>
            <p>Наш адрес: г.Чебоксары, ул.Карла Макса 11 стр.49</p>
        </div>
        <div class="container">
            <div class="title">
                <h4>Оставьте контакт</h4>
            </div>
            <div class="box">
                <div class="contact form">
                    <h5>И мы вам перезвоним</h5>
                    <form>
                        <div class="formBx">
                            <div class="row50">
                                <div class="inputBox">
                                    <span>Фамилия:</span>
                                    <input type="text" placeholder="Николаев">
                                </div>
                                <div class="inputBox">
                                    <span>Имя:</span>
                                    <input type="text" placeholder="Никита">
                                </div>
                            </div>
                            <div class="row50">
                                <div class="inputBox">
                                    <span>Email:</span>
                                    <input type="text" placeholder="Ex: info@autozap.ru">
                                </div>
                                <div class="inputBox">
                                    <span>Телефон:</span>
                                    <input type="text" placeholder="+79533871114">
                                </div>
                            </div>
                            <div class="row100">
                                <div class="inputBox">
                                    <span>Сообщение</span>
                                    <textarea placeholder="Тут напишите, что вас интересует или вопрос"></textarea>
                                </div>
                            </div>
                            <div class="row100">
                                <div class="inputBox">
                                    <input type="submit" value="Оправить" style="border: 1px solid; background-color: rgba(25, 118, 210, 1); color: white">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </section>
@endsection

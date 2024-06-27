<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Автозапчасти</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="header-block">
            <div class="container d-flex align-items-center justify-content-between flex-wrap">
                <p>Бесплатная доставка при заказе от 5000 рублей</p>
                <div class="d-flex gap-1">
                    @if(\Illuminate\Support\Facades\Auth::user())
                        <a>Привет, {{ \Illuminate\Support\Facades\Auth::user()->name }}</a>
                        <a href="{{ route('order') }}"  class="header-link">Заказы</a>
                        <a href="{{ route('logout') }} " class="header-link">Выход</a>
                    @else
                        <a href="{{ route('login') }}" class="header-link">Войти</a>
                        <a href="{{ route('register') }}" class="header-link">Регистрация</a>
                    @endif
                </div>
            </div>
        </div>
        <div class="container header-body">
            <div>
                <a href="{{ route('index') }}" class="header-logotip">Автозапчасти</a>
            </div>
            <div class="header-search" style="flex: 1;">
                <form action="{{ route('search') }}" method="post">
                    @csrf
                    <input type="text" placeholder="Что ищем?" style="width: 100%; padding: 6px 12px; height: 41px;
                    border: 1px solid rgba(0, 0, 0, .05); border-radius: 5px" name="name">
                    <button type="submit" style="
                        display: flex;
                        -webkit-box-align: center;
                        align-items: center;
                        gap: 15px;
                        position: absolute;
                        right: 12px;
                        top: 0;
                        bottom: 0;
                        margin: auto;
                        padding: 0;
                        border: 0;
                        background-color: transparent;"></button>
                </form>
            </div>
            <div class="header-number-phone">
                <a class="header-number">+7(953)387-11-14</a>
                <a class="header-number-button">Заказать звонок</a>
            </div>
            <div class="header-email">
                <a class="header-email-text">info@autozap.ru</a>
                <a class="header-email-button">Напишите нам!</a>
            </div>
            <div class="header-basket">
                <a href="{{ route('basket') }}" style="font-size: 14px; color: #333">Корзина</a>
            </div>
        </div>
    </header>
    <nav class="header-nav-links">
        <div class="container">
            <div class="burger" id="headerNavButton">
            </div>
            <ul class="close" id="headerNavUl">
                <li>
                    <a href="{{ route('category') }}" class="nav-link">
                        Каталог
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('about') }}">
                        О компании
                    </a>
                </li>
                <li>
                    <a class="nav-link">
                        Новости
                    </a>
                </li>
                <li>
                    <a class="nav-link">
                        Статьи
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('dostava') }}">
                        Доставка и оплата
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('contacts') }}">
                        Контакты
                    </a>
                </li>
                <li>
                    <a class="nav-link">
                        Отзывы
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-rows">
                <div class="footer-row-1">
                    <div class="footer-address">
                        г.Чебоксары, ул.Карла Макса 11 стр.49
                    </div>
                    <div class="footer-info">
                        <p class="footer-text-number">Телефоны</p>
                        <p class="footer-number">+7(953)387-11-14</p>
                        <p class="footer-number">+7(953)387-11-14</p>
                    </div>
                    <div class="footer-date">
                        <p class="footer-date-text">Часы работы</p>
                        <p class="footer-date-date">Пн - Вс: 10:00 - 20:00</p>
                    </div>
                    <div class="footer-email">
                        <p class="footer-text-email">Электронная почта</p>
                        <p class="footer-email-text">info@autozap.ru</p>
                    </div>
                </div>
                <div class="footer-nav">
                    <div>
                        <ul class="footer-nav-ul">
                            <li>
                                <a href="{{ route('category') }}" class="nav-link">
                                    Каталог
                                </a>
                            </li>
                            <li>
                                <a class="nav-link">
                                    О компании
                                </a>
                            </li>
                            <li>
                                <a class="nav-link">
                                    Новости
                                </a>
                            </li>
                            <li>
                                <a class="nav-link">
                                    Статьи
                                </a>
                            </li>
                            <li>
                                <a class="nav-link">
                                    Доставка и оплата
                                </a>
                            </li>
                            <li>
                                <a class="nav-link">
                                    Контакты
                                </a>
                            </li>
                            <li>
                                <a class="nav-link">
                                    Отзывы
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-social-links">
                        <a>
                            <svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09"/>
                            </svg>
                        </a>
                        <a>
                            <svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                            </svg>
                        </a>
                        <a>
                            <svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                            </svg>
                        </a>
                    </div>
                    <div class="d-flex pt-1.5">
                        <p>2024 Все права защищены</p>
                        <p class="polity">Политика конфиденциальности</p>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- Footer -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

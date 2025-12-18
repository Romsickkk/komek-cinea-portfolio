<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komek - Кинотеатр</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

   
    <div class="page-wrapper">
        <div class="bg-side left"></div>
        <div class="main-wrapper">
            <!-- Hero Banner -->
            <section class="hero-banner" >
                <img src="poster.png" alt="Hero Banner" class="hero-image">
            </section>

            <!-- Header -->
            <header class="header">
                <div class="header-content">
                    <div class="header-row">
                        <div class="logo">
                            <img src="logo.svg" alt="logo">
                        </div>
                        <div class="header-info">
                            Казахстан
                            <span class="sub-info">
                                город Талгар-1
                            </span>
                        </div>
                        
                        <div class="header-info">
                            <div class="number-wrapper">
                                +7 (775) 030 60 01
                                <img src="vector.svg" alt="icon" class="header-icon">
                            </div>
                            <span class="sub-info">Касса</span>
                        </div>
                    </div>

                    <div class="social-buttons">
                        <a href="#" class="socials">
                            <img src="f.svg" alt="icon" class="social-icon">
                        </a>
                        <a href="#" class="socials">
                            <img src="i.svg" alt="icon" class="social-icon">
                        </a>
                        <a href="#" class="socials">
                            <img src="y.svg" alt="icon" class="social-icon">
                        </a>
                        <a href="#" class="socials">
                            <img src="v.svg" alt="icon" class="social-icon">
                        </a>
                        
                        <button class="ticket-btn">Мне пришёл билет</button>
                    </div>
                </div>
            </header>

            <!-- Navigation -->
            <nav class="navigation">
                <ul class="nav-menu">
                    <li><a href="#" class="active">Афиша</a></li>
                    <li><a href="#">Сеансы</a></li>
                    <li><a href="#">Кинотеатр</a></li>
                    <li><a href="#">Контакты</a></li>
                    <li><a href="#" class="ticket-btn">Войти</a></li>
                    <li><a href="#" class="ticket-btn">Написать отзыв</a></li>
                </ul>
            </nav>

            <!-- Filter Tabs -->
            <div class="filter-tabs">
                <button class="filter-tab active" data-date="2025-12-18">Сегодня</button>
                <button class="filter-tab" data-date="2025-12-9">Завтра</button>
                <button class="filter-tab" data-date="2024-12-10">Воскресенье, 10 дек</button>
                <button class="filter-tab" data-date="2024-12-12">Понедельник, 11 дек</button>
                <button class="filter-tab" data-date="2024-12-13">Вторник, 12 дек</button>
                <button class="filter-tab" data-date="2024-12-14">Среда, 13 дек</button>
            </div>

            <!-- Movies Grid -->
            <div class="movies-container">
                <div class="movies-grid">
                    <x-movie-card 
                        :poster="'movie1.svg'" 
                        :premiere="'ПРЕМЬЕРА'" 
                        :age="'12+'" 
                        :title="'Праздники'" 
                        :genres="['комедия']" 
                        :times="[
                            ['time'=>'15:35','format'=>'2D','price'=>'1233 ₸', 'hall' => 'Зал 3'],
                            ['time'=>'17:40','format'=>'2D','price'=>'1233 ₸', 'hall' => 'Зал 6 VIP'],
                            ['time'=>'19:15','format'=>'2D','price'=>'1233 ₸', 'hall' => 'Зал 4'],
                            ['time'=>'21:05','format'=>'2D','price'=>'1233 ₸', 'hall' => 'Зал 3'],
                            ['time'=>'21:40','format'=>'2D','price'=>'1233 ₸', 'hall' => 'Зал 6 VIP'],
                            ['time'=>'22:45','format'=>'2D','price'=>'1233 ₸', 'hall' => 'Зал 3'],
                        ]"
                    />

                    <x-movie-card 
                        :poster="'movie2.svg'" 
                        :premiere="''" 
                        :age="'16+'" 
                        :title="'Мега 2: Бездна'" 
                        :genres="['экшн','триллер']" 
                        :times="[
                            ['time'=>'15:35','format'=>'2D','price'=>'1233 ₸', 'hall' => 'Зал 3 VIP'],
                        ]"
                        :hall="'Зал 3 VIP'"
                    />

                     <x-movie-card 
                        :poster="'movie3.svg'" 
                        :premiere="''" 
                        :age="'16+'" 
                        :title="'Заложники'" 
                        :genres="['Боевик']" 
                        :times="[
                            ['time'=>'15:35','format'=>'2D','price'=>'1700 ₸', 'hall' => 'Зал 3'],
                            ['time'=>'17:00','format'=>'2D','price'=>'4030 ₸', 'hall' => 'Зал 6 VIP'],
                            ['time'=>'20:45','format'=>'2D','price'=>'3080 ₸', 'hall' => 'Зал 3'],
                            ]"
                        :hall="'Зал 3 VIP'"
                    />

                     <x-movie-card 
                        :poster="'movie4.svg'" 
                        :premiere="''" 
                        :age="'6+'" 
                        :title="'Леди Баг и Супер-Кот: Пробуждение силы'" 
                        :genres="['фентези','боевик','мелодрама', 'ультфиль', 'коедия']" 
                        :times="[
                            ['time'=>'15:35','format'=>'2D','price'=>'1233 ₸', 'hall' => 'Зал 3 VIP'],
                        ]"
                        :hall="'Зал 3 VIP'"
                    />

                     <x-movie-card 
                        :poster="''" 
                        :premiere="''" 
                        :age="''" 
                        :title="'Название фильма'" 
                        :genres="['комедия']" 
                        :times="[
                            ['time'=>'15:35','format'=>'2D','price'=>'1233 ₸', 'hall' => 'Зал 3 VIP'],
                        ]"
                        :hall="'Зал 3 VIP'"
                    />

                     <x-movie-card 
                        :poster="'movie5.svg'" 
                        :premiere="''" 
                        :age="'16+'" 
                        :title="'Руслан и Людмила. Больше, чем сказка'" 
                        :genres="['анимационое приключение']" 
                        :times="[
                            ['time'=>'Сеансы на Завтра','format'=>'2D',],
                        ]"
                        :hall="'Зал 3 VIP'"
                    />
                </div>
            </div>
            <!-- Footer -->
            <footer class="footer">
                <div class="footer-info">
                     
                        <div class="logo">
                            <img src="logo.svg" alt="logo">
                        </div>

                        <div>
                            <p>admin@example.com</p>
                            <p>ticket@example.com</p>
                            <p class="sub-info">улица Тестовая 1</p>
                        </div>

                        <div class="header-info">
                            <div class="number-wrapper">
                                +7 (775) 030 60 01
                                <img src="vector.svg" alt="icon" class="header-icon">
                            </div>
                            <span class="sub-info">Касса</span>
                        </div>
                    
                        <div>
                              <p>08:00 - 22:00 с пн.-пт.</p>
                            <p class="sub-info">График работы</p>
                        </div>
                  
                </div>

                <div class="footer-content">
                    <div class="footer-section">
                        <h3>Меню</h3>
                        <ul>
                            <li><a href="#">Афиша</a></li>
                            <li><a href="#">Сеансы</a></li>
                            <li><a href="#">Пушкинская карта</a></li>
                            <li><a href="#">Кинотеатр</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                    </div>


                    <div class="payment-info">
                        <div>
                            <p>Способы оплаты:</p>
                            <div class="payment-methods">
                                <img src="mastercard.svg" alt="mastercard">
                                <img src="visa.svg" alt="visa">
                            </div>
                        </div>
                        <p class="sub-info">
                            Все сеансы начинаются с рекламно-информационного блока.<br/>
                            Точную продолжительность сеансов можно уточнить в кинотеатре.
                        </p>
                    </div>
                </div>

                <div class="footer-bottom">
                    <div class="social-buttons">
                        <a href="#" class="socials">
                            <img src="f.svg" alt="icon" class="social-icon">
                        </a>
                        <a href="#" class="socials">
                            <img src="i.svg" alt="icon" class="social-icon">
                        </a>
                        <a href="#" class="socials">
                            <img src="y.svg" alt="icon" class="social-icon">
                        </a>
                        <a href="#" class="socials">
                            <img src="v.svg" alt="icon" class="social-icon">
                        </a>
                    </div>

                    <p>© 2025 Все права защищены</p>
                </div>
            </footer>
        </div>
        <div class="bg-side right"></div>
    </div>
    <script>
        document.querySelectorAll('.filter-tab').forEach(tab => {
            tab.addEventListener('click', function() {
                document.querySelectorAll('.filter-tab').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
            });
        });

        document.querySelectorAll('.time-slot:not(.disabled)').forEach(slot => {
            slot.addEventListener('click', function() {
                console.log('Selected time:', this.textContent);
            });
        });
    </script>
</body>
</html>

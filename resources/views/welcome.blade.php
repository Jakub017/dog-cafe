<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doggo cafe</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100;300;400;900&family=Work+Sans:wght@300;400;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css') }}">
</head>

<body>
    <header>
        <nav class="nav">
            <div class="nav__wrapper">
                <img class="nav__logo" src="{{ asset('img/logo.png') }}" alt="">
                <ul class="nav__menu">
                    <li class="nav__item"><a href="" class="nav__link">Home</a></li>
                    <li class="nav__item"><a href="" class="nav__link">Offer</a></li>
                    <li class="nav__item"><a href="" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="" class="nav__link">Our pets</a></li>
                    <li class="nav__item"><a href="" class="nav__link">Contact</a></li>
                </ul>
                <div class="nav__mobile">
                    <h3>menu</h3>
                    <div class="nav__hamburger">
                        <span class="nav__hamburger-item"></span>
                        <span class="nav__hamburger-item"></span>
                        <span class="nav__hamburger-item"></span>
                    </div>
                </div>
            </div>
            <div class="nav__wave">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                    preserveAspectRatio="none">
                    <path
                        d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                        class="shape-fill"></path>
                </svg>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="hero__wrapper">
                <div class="hero__text">
                    <h1 class="hero__title">WELCOME TO DOGGO CAFÉ.
                        <span class="colored-pink">CUTE DOGS, GOOD FOOD, HAPPY PEOPLE!</span></h1>
                    <p class="hero__description">The Doggo Café is a heaven for dog lovers, where you can enjoy
                        delicious cakes, coffees and teas all in the company of our resident dogs.
                    </p>
                </div>
                <a href="#" class="hero__button">Book a table</a>
                <!-- <img class="hero__paws" src="{{ asset('img/paws.png') }}" alt=""> -->
            </div>
        </section>
        <section class="offer">
            <div class="offer__background"></div>
            <h1 class="offer__title">Our Offer</h1>
            <div class="offer__isotope">
                <button class="offer__button">Coffee</button>
                <button class="offer__button">Tea</button>
                <button class="offer__button">Cakes</button>
                <button class="offer__button offer__button--active">Dog treats</button>
            </div>
            <div class="offer__wrapper">
                <div class="offer__item">
                    <img src="{{ asset('img/coffee1.png') }}" alt="" class="offer__img">
                    <div class="offer__tag">
                        <h2 class="offer__name">Dalgona coffee</h2>
                        <h3 class="offer__price">$12</h3>
                    </div>
                    <p class="offer__description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis
                        porro nulla nobis excepturi cumque accusamus inventore dolorum itaque ducimus!</p>
                    <!-- <h3 class="offer__price">$12</h3> -->
                </div>
                <div class="offer__item">
                    <img src="{{ asset('img/coffee1.png') }}" alt="" class="offer__img">
                    <div class="offer__tag">
                        <h2 class="offer__name">Dalgona coffee</h2>
                        <h3 class="offer__price">$12</h3>
                    </div>
                    <p class="offer__description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis
                        porro nulla nobis excepturi cumque accusamus inventore dolorum itaque ducimus!</p>
                    <!-- <h3 class="offer__price">$12</h3> -->
                </div>
                <div class="offer__item">
                    <img src="{{ asset('img/coffee1.png') }}" alt="" class="offer__img">
                    <div class="offer__tag">
                        <h2 class="offer__name">Dalgona coffee</h2>
                        <h3 class="offer__price">$12</h3>
                    </div>
                    <p class="offer__description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis
                        porro nulla nobis excepturi cumque accusamus inventore dolorum itaque ducimus!</p>
                    <!-- <h3 class="offer__price">$12</h3> -->
                </div>
                <div class="offer__item">
                    <img src="{{ asset('img/coffee1.png') }}" alt="" class="offer__img">
                    <div class="offer__tag">
                        <h2 class="offer__name">Dalgona coffee</h2>
                        <h3 class="offer__price">$12</h3>
                    </div>
                    <p class="offer__description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis
                        porro nulla nobis excepturi cumque accusamus inventore dolorum itaque ducimus!</p>
                    <!-- <h3 class="offer__price">$12</h3> -->
                </div>
                <div class="offer__item">
                    <img src="{{ asset('img/coffee1.png') }}" alt="" class="offer__img">
                    <div class="offer__tag">
                        <h2 class="offer__name">Dalgona coffee</h2>
                        <h3 class="offer__price">$12</h3>
                    </div>
                    <p class="offer__description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis
                        porro nulla nobis excepturi cumque accusamus inventore dolorum itaque ducimus!</p>
                    <!-- <h3 class="offer__price">$12</h3> -->
                </div>
                <div class="offer__item">
                    <img src="{{ asset('img/coffee1.png') }}" alt="" class="offer__img">
                    <div class="offer__tag">
                        <h2 class="offer__name">Dalgona coffee</h2>
                        <h3 class="offer__price">$12</h3>
                    </div>
                    <p class="offer__description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis
                        porro nulla nobis excepturi cumque accusamus inventore dolorum itaque ducimus!</p>
                    <!-- <h3 class="offer__price">$12</h3> -->
                </div>
                <div class="offer__item">
                    <img src="{{ asset('img/coffee1.png') }}" alt="" class="offer__img">
                    <div class="offer__tag">
                        <h2 class="offer__name">Dalgona coffee</h2>
                        <h3 class="offer__price">$12</h3>
                    </div>
                    <p class="offer__description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis
                        porro nulla nobis excepturi cumque accusamus inventore dolorum itaque ducimus!</p>
                    <!-- <h3 class="offer__price">$12</h3> -->
                </div>
                <div class="offer__item">
                    <img src="{{ asset('img/coffee1.png') }}" alt="" class="offer__img">
                    <div class="offer__tag">
                        <h2 class="offer__name">Dalgona coffee</h2>
                        <h3 class="offer__price">$12</h3>
                    </div>
                    <p class="offer__description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis
                        porro nulla nobis excepturi cumque accusamus inventore dolorum itaque ducimus!</p>
                    <!-- <h3 class="offer__price">$12</h3> -->
                </div>
            </div>
        </section>
        <section class="about">
            <div class="about__background"></div>
            <h1 class="about__title">About us</h1>
            <div class="about__wrapper">
                <img class="about__image" src="{{ asset('img/about.jpg') }}" alt="">
                <div class="about__text">
                    <div class="about__part">
                        <h1 class="about__heading">Our mission</h1>
                        <p class="about__description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam
                            beatae alias consectetur natus molestiae, tempora, unde omnis inventore tenetur magnam
                            incidunt.</p>
                    </div>
                    <div class="about__part">
                        <h1 class="about__heading">Our impact</h1>
                        <p class="about__description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam
                            beatae alias consectetur natus molestiae, tempora, unde omnis inventore tenetur magnam
                            incidunt.</p>
                    </div>
                    <div class="about__part">
                        <h1 class="about__heading">Our history</h1>
                        <p class="about__description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam
                            beatae alias consectetur natus molestiae, tempora, unde omnis inventore tenetur magnam
                            incidunt.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer></footer>
</body>

</html>

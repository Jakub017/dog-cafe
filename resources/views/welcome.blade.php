<!DOCTYPE html>
<html lang="en">

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
                    <li class="nav__item"><button href="/" class="nav__link">Home</button></li>
                    <li class="nav__item"><button class="nav__link nav__link--offer">Offer</button></li>
                    <li class="nav__item"><button class="nav__link nav__link--about">About</button></li>
                    <li class="nav__item"><button class="nav__link nav__link--pets">Our pets</button></li>
                    <li class="nav__item"><button class="nav__link nav__link--contact">Contact</button></li>
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
                        <span class="colored-baige">CUTE DOGS, GOOD FOOD, HAPPY PEOPLE!</span></h1>
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
                <button class="offer__button offer__button--coffee">Coffee</button>
                <button class="offer__button offer__button--tea offer__button--active">Tea</button>
                <button class="offer__button offer__button--cakes">Cakes</button>
                <button class="offer__button offer__button--treats">Dog treats</button>
            </div>
            <div class="offer__wrapper">
                <div class="offer__item offer__item--coffee">
                    <img src="{{ asset('img/coffee1.png') }}" alt="" class="offer__img">
                    <div class="offer__tag">
                        <h2 class="offer__name">Dalgona Coffee</h2>
                        <h3 class="offer__price">$16</h3>
                    </div>
                    <p class="offer__description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis
                        porro nulla nobis excepturi cumque accusamus inventore dolorum itaque ducimus!</p>
                </div>
                <div class="offer__item offer__item--coffee">
                    <img src="{{ asset('img/black_coffee.png') }}" alt="" class="offer__img">
                    <div class="offer__tag">
                        <h2 class="offer__name">Black Coffee</h2>
                        <h3 class="offer__price">$13</h3>
                    </div>
                    <p class="offer__description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis
                        porro nulla nobis excepturi cumque accusamus inventore dolorum itaque ducimus!</p>
                </div>
                <div class="offer__item offer__item--tea offer__item--active">
                    <img src="{{ asset('img/linden_tea.png') }}" alt="" class="offer__img">
                    <div class="offer__tag">
                        <h2 class="offer__name">Linden Tea</h2>
                        <h3 class="offer__price">$10</h3>
                    </div>
                    <p class="offer__description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis
                        porro nulla nobis excepturi cumque accusamus inventore dolorum itaque ducimus!</p>
                </div>
                <div class="offer__item offer__item--cake">
                    <img src="{{ asset('img/chocolate_cake.png') }}" alt="" class="offer__img">
                    <div class="offer__tag">
                        <h2 class="offer__name">Chocolate Cake</h2>
                        <h3 class="offer__price">$12</h3>
                    </div>
                    <p class="offer__description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis
                        porro nulla nobis excepturi cumque accusamus inventore dolorum itaque ducimus!</p>
                </div>
                <div class="offer__item offer__item--tea offer__item--active">
                    <img src="{{ asset('img/matcha_tea.png') }}" alt="" class="offer__img">
                    <div class="offer__tag">
                        <h2 class="offer__name">matcha Tea</h2>
                        <h3 class="offer__price">$13</h3>
                    </div>
                    <p class="offer__description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis
                        porro nulla nobis excepturi cumque accusamus inventore dolorum itaque ducimus!</p>
                </div>
                <div class="offer__item offer__item--treat">
                    <img src="{{ asset('img/chewing_sticks.png') }}" alt="" class="offer__img">
                    <div class="offer__tag">
                        <h2 class="offer__name">Chewing Sticks</h2>
                        <h3 class="offer__price">$10</h3>
                    </div>
                    <p class="offer__description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis
                        porro nulla nobis excepturi cumque accusamus inventore dolorum itaque ducimus!</p>
                </div>
                <div class="offer__item offer__item--cake">
                    <img src="{{ asset('img/bundt_cake.png') }}" alt="" class="offer__img">
                    <div class="offer__tag">
                        <h2 class="offer__name">Bundt Cake</h2>
                        <h3 class="offer__price">$12</h3>
                    </div>
                    <p class="offer__description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis
                        porro nulla nobis excepturi cumque accusamus inventore dolorum itaque ducimus!</p>
                </div>
                <div class="offer__item offer__item--treat">
                    <img src="{{ asset('img/chewing_bone.png') }}" alt="" class="offer__img">
                    <div class="offer__tag">
                        <h2 class="offer__name">Chewing Bone</h2>
                        <h3 class="offer__price">$14</h3>
                    </div>
                    <p class="offer__description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis
                        porro nulla nobis excepturi cumque accusamus inventore dolorum itaque ducimus!</p>
                </div>
                <div class="offer__item offer__item--tea offer__item--active">
                    <img src="{{ asset('img/herbal_tea.png') }}" alt="" class="offer__img">
                    <div class="offer__tag">
                        <h2 class="offer__name">Herbal Tea</h2>
                        <h3 class="offer__price">$13</h3>
                    </div>
                    <p class="offer__description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis
                        porro nulla nobis excepturi cumque accusamus inventore dolorum itaque ducimus!</p>
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
        <section class="pets">
            <div class="pets__background"></div>
            <h1 class="pets__title">Our pets</h1>
            <div class="pets__wrapper">
                @foreach($pets as $pet)
                <div class="pets__item">
                    <img src="{{ asset('storage/'.$pet->image) }}" alt="" class="pets__image">
                    <h1 class="pets__name">{{ $pet->name }}</h1>
                    <h3 class="pets__breed">{{ $pet->breed }}</h3>
                    <p class="pets__description">{{ $pet->description }}</p>
                </div>
                @endforeach
            </div>
        </section>
        <section class="contact">
            <h1 class="contact__title">Contact us</h1>
            <p class="contact__text">Ask a question about the cafe or adopting a pet! We will reply as soon as possible
            </p>
            <div class="contact__wrapper">
                <form action="#" class="contact__form">
                    <div class="contact__field contact__field--half">
                        <label for="name" class="contact__label">Name</label>
                        <input type="text" name="name" class="contact__input">
                    </div>
                    <div class="contact__field contact__field--half">
                        <label for="email" class="contact__label">Email</label>
                        <input type="email" name="email" class="contact__input">
                    </div>
                    <div class="contact__field">
                        <label for="subject" class="contact__label">Subject</label>
                        <input type="text" name="subject" class="contact__input">
                    </div>
                    <div class="contact__field">
                        <label for="message" class="contact__label">Message</label>
                        <textarea name="message" class="contact__input" cols="30" rows="10"></textarea>
                    </div>
                    <button class="contact__send">Send!</button>
                </form>
                <div class="contact__info">
                    <h2 class="contact__heading">
                        Contact <span class="colored-baige">info</span>
                    </h2>
                    <div class="contact__block">
                        <h4 class="contact__name">Address</h4>
                        <p class="contact__part">
                            71 Cherry Court<br>
                            SOUTHAMPTON<br>
                            SO53 5PD<br>
                            UK
                        </p>
                    </div>
                    <div class="contact__block">
                        <h4 class="contact__name">Opening hours</h4>
                        <p class="contact__part">
                            <b>Monday: </b>12:00 - 21:00<br>
                            <b>Tuesday: </b>12:00 - 21:00<br>
                            <b>Wednesday: </b>12:00 - 21:00<br>
                            <b>Thursday: </b>12:00 - 21:00<br>
                            <b>Friday: </b>12:00 - 22:00<br>
                            <b>Saturday: </b>10:00 - 21:00<br>
                            <b>Sunday: </b>10:00 - 21:00
                        </p>
                    </div>
                    <div class="contact__block">
                        <h4 class="contact__name">Contact</h4>
                        <p class="contact__part">
                            <b>Mail: </b><a class="contact__link"
                                href="mailto:contact@doggocafe.co.uk">contact@doggocafe.co.uk</a><br>
                            <b>Phone: </b><a class="contact__link" href="tel:5467 359 9843">5467 359 9843</a>
                        </p>
                    </div>
                </div>
            </div>

        </section>
    </main>
    <footer class="footer">
        <div class="footer__wave">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>
        </div>
        <div class="footer__wrapper">
            <div class="footer__column">
                <img src="{{ asset('img/logo.png') }}" alt="" class="footer__logo">
                <p class="footer__text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio mollitia
                    voluptatem,
                    minima quo animi soluta consequuntur a tempore, repellendus et assumenda quam incidunt praesentium
                    consequatur vel dignissimos est, autem voluptatum.</p>
            </div>
            <div class="footer__column">
                <h2 class="footer__heading">About dog cafes</h2>
                <ul class="footer__list">
                    <li class="footer__item"><a class="footer__link" target="_blank"
                            href="https://en.wikipedia.org/wiki/Dog_caf%C3%A9">Wikipedia page</a></li>
                </ul>
            </div>
            <div class="footer__column">
                <h2 class="footer__heading">Animals in need</h2>
                <ul class="footer__list">
                    <li class="footer__item"><a class="footer__link" target="_blank"
                            href="https://helpingdogsandcatsuk.org/">Helping dogs & cats UK</a></li>
                    <li class="footer__item"><a class="footer__link" target="_blank"
                            href="https://almosthome.dog/">Almost home dog rescue</a></li>
                    <li class="footer__item"><a class="footer__link" target="_blank"
                            href="https://guardianangelsdogrescue.co.uk/">Guardian Angels Dog Rescue</a></li>
                    <li class="footer__item"><a class="footer__link" target="_blank"
                            href="https://threecountiesdogrescue.org/">Three Counties Dog Rescue</a></li>
                </ul>
            </div>
            <div class="footer__column">
                <h2 class="footer__heading">Other dog cafes</h2>
                <ul class="footer__list">
                    <li class="footer__item"><a class="footer__link" target="_blank"
                            href="https://pawsitivecafe.com/">Pawsitive cafe</a></li>
                    <li class="footer__item"><a class="footer__link" target="_blank" href="https://www.pupup.cafe/">Pup
                            up cafe</a></li>
                    <li class="footer__item"><a class="footer__link" target="_blank" href="https://dogandscone.com/">Dog
                            and Scone Cafe</a></li>

                </ul>
            </div>
        </div>
        <div class="footer__copyright">
            <p class="footer__text">© 2023 <b>Doggo Cafe</b> | Created with love by <b><a class="footer__link"
                        target="_blank" href="https://www.lipinskijakub.pl/">Jakub Lipiński.</a></b><br> Big shout out
                to <b><a class="footer__link" target="_blank" href="https://www.kittycafe.co.uk/">Kitty Cafe</a></b></p>
        </div>
    </footer>

    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>

// Offer cards code starts

const offerButtons = [...document.querySelectorAll('.offer__button')];
const offerCards = [...document.querySelectorAll('.offer__item')];

const coffeeButton = document.querySelector('.offer__button:nth-child(1)');
const teaButton = document.querySelector('.offer__button:nth-child(2)');
const cakeButton = document.querySelector('.offer__button:nth-child(3)');
const treatsButton = document.querySelector('.offer__button:nth-child(4)');

const coffeeCards = [...document.querySelectorAll('.offer__item--coffee')];
const teaCards = [...document.querySelectorAll('.offer__item--tea')];
const cakeCards = [...document.querySelectorAll('.offer__item--cake')];
const treatsCards = [...document.querySelectorAll('.offer__item--treats')];

offerButtons.forEach((button) => {
    button.addEventListener('click', function () {
        offerButtons.forEach((item) => {
            item.classList.remove('offer__button--active');
        })
        button.classList.add('offer__button--active');

        offerCards.forEach((card) => {
            card.classList.remove('offer__item--active');
        })

        if (button.classList.contains('offer__button--coffee')) {
            offerCards.forEach((card) => {
                if (card.classList.contains('offer__item--coffee')) {
                    card.classList.add('offer__item--active');
                }
            })
        } else if (button.classList.contains('offer__button--tea')) {
            offerCards.forEach((card) => {
                if (card.classList.contains('offer__item--tea')) {
                    card.classList.add('offer__item--active');
                }
            })
        } else if (button.classList.contains('offer__button--cakes')) {
            offerCards.forEach((card) => {
                if (card.classList.contains('offer__item--cake')) {
                    card.classList.add('offer__item--active');
                }
            })
        } else if (button.classList.contains('offer__button--treats')) {
            offerCards.forEach((card) => {
                if (card.classList.contains('offer__item--treat')) {
                    card.classList.add('offer__item--active');
                }
            })
        }
    })
})

// Offer cards code ends

// Scroll to section code starts

const offerSection = document.querySelector('.offer');
const offerLink = document.querySelector('.nav__link--offer');
const aboutSection = document.querySelector('.about');
const aboutLink = document.querySelector('.nav__link--about');
const petsSection = document.querySelector('.pets');
const petsLink = document.querySelector('.nav__link--pets');
const contactSection = document.querySelector('.contact');
const contactLink = document.querySelector('.nav__link--contact');


offerLink.addEventListener('click', function () {
    offerSection.scrollIntoView();
});

aboutLink.addEventListener('click', function () {
    aboutSection.scrollIntoView();
});

petsLink.addEventListener('click', function () {
    petsSection.scrollIntoView();
});

contactLink.addEventListener('click', function () {
    contactSection.scrollIntoView();
});


// Scroll to section code ends

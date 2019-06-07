// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*';
//Import Classes
import StickyHeader from './StickyHeader';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

//Import Slick Carousel
import 'slick-carousel/slick/slick.min';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());

//Main Navigation Mobile Menu
const state = {
  scrollIsLocked: false,
}
const mobileMenu = '.mobile-menu';
const mobileMenuTrigger = '.mobileTrigger';
const activeClass = 'mobile-menu--open';
const closeClass = 'mobile-menu__close';
const closeTrigger = document.querySelector(`.${closeClass}`);

//Trigger Menu
const triggerMenu = () => {
  if (document.querySelector(mobileMenu).classList.contains(activeClass)){
    document.querySelector(mobileMenu).classList.remove(activeClass);
  } else {
    document.querySelector(mobileMenu).classList.add(activeClass);
  }
  if(state.scrollIsLocked) {
    document.ontouchmove = (e)=>e.preventDefault();
    document.querySelector(mobileMenu).ontouchend = (e) => {
      e.preventDefault();
    }
  } else {
    return true;
  }
  state.scrollIsLocked = !state.scrollIsLocked;
}

// Event Listeners
document.querySelector(mobileMenuTrigger).addEventListener ( 'click', (e)=> {
  e.preventDefault(e)
  triggerMenu();
})
document.querySelector(mobileMenu).addEventListener ( 'click', ()=> {
  triggerMenu();
})

closeTrigger.addEventListener('click', ()=>triggerMenu);

$('.carousel-slider').slick({
  dots: false,
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 3000,
  speed: 1500,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        centerMode: true,
        centerPadding: '64px',
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: false,
        centerPadding: 0,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: false,
        centerPadding: 0,
      },
    },
  ],
});

/** Instantiate Classes */
new StickyHeader ();

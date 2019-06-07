import _ from 'lodash';

/**Mobile Sticky Header Class*/
export default class StickyHeader {
    constructor () {
      this.setupEventListener();
    }
  
    //Setup Scrolling Event Listener
    setupEventListener () {
      //Using lodash to avoid heavy data propagation
      window.addEventListener('scroll', _.throttle(() => { 
        this.firingAction();
      }, 300));
    }
  
    //Setup scroll triggering function add class to css
    firingAction (){
      let scrollPosition = Math.round(window.scrollY);
  
      // If we've scrolled 100px, add "sticky" class to the header
      if (scrollPosition > 10){
        document.querySelector('header').classList.add('sticky-header');
      }
      // If not, remove "sticky" class from header
      else {
        document.querySelector('header').classList.remove('sticky-header');
      }
    }
  }
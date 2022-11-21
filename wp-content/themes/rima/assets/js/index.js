// Scripts`
// import initialiseMenu from './includes/menu-primary';
import scrollToElement from './includes/scroll-to-element';
import toggleModals from './includes/toggle-modals';
// import fetch_posts from './includes/fetch-posts';
// import './includes/carousel-slider';


window.scrollToElement = scrollToElement;
// window.fetchPosts = fetch_posts;

(() => {
    
    document.addEventListener('DOMContentLoaded', () => {
        toggleModals();
        // initialiseMenu();

        setTimeout(() => document.querySelector('.logo').classList.remove('translate-y-[-200px]'), 100);

        document.querySelector('#back-to-top').addEventListener('click', () => scrollToElement('body'));
    });

    // change navbar on scroll:
    document.addEventListener('scroll', () => {
        let navbar = document.querySelector('.nav-bar')
        
        if(document.body.getBoundingClientRect().top < -75){
            navbar.classList.add('bar-shadow');
        } else {
            navbar.classList.remove('bar-shadow');

        }
    });
})();



// misschien nodig? dan converteren naar vanilla js
// $('#menu-main-menu-mobile > .menu-item-has-children > a').on('click', function() {
//     $(this).parent().toggleClass('active');
//     $('#menu-main-menu-mobile > .menu-item').each(function() {
//         if ($('#menu-main-menu-mobile > .menu-item.active').length < 1) {
//             $(this).removeClass('not-active');
//         } else if ($(this).hasClass('active') == false) {
//             $(this).addClass('not-active');
//         }
//     })

// });
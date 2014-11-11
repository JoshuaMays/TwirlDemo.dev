/**
 * main.js
 *
 * responsible for adding menu to the page
 */



;(function ( window, document, Btn, FastClick, undefined) {
    'use strict';



    // Used for creating alert messages popups for button
    function alertEvent( title ) {
        return function() { window.alert( title ); };
    }



    // Used for creating links for button
    function linkEvent( link ) {
        return function() { window.location.href = link; };
    }



    // remove CSS that makes the menu invisible onload
    function removeIsMainInvisble() {
        document.documentElement.classList.remove('is-main-invisible');
    }



    // The functions that run after `DOMContetedLoaded`
    function onload() {
        // fast click for iOS / Android
        if ( document.documentElement.classList.contains('touch-fix') ) FastClick.attach(document.body);


        // creates the menu
        new Btn( 'Menu' ).addClass('skin-main_menu')
            .append( new Btn('About').addClass('queryButtonMood').addClass('skin').on( 'click', linkEvent('#') ) )

            .append( new Btn('Stylists').addClass('queryButtonMood').addClass('skin').on( 'click', linkEvent('#') ) )

            .append( new Btn('Services').addClass('queryButtonMood').addClass('skin').on( 'click', linkEvent('#') ) )

            .append( new Btn('Products').addClass('skin'))

            .append( new Btn('Gallery').addClass('queryButtonMood').addClass('skin').on( 'click', linkEvent('#') ) )

            .append( new Btn('Find Twirl').addClass('queryButtonMood').addClass('skin').on( 'click', linkEvent('#') ) )

            .append( new Btn('Contact').addClass('queryButtonMood').addClass('skin').on( 'click', linkEvent('#') ) )
            
            .append( new Btn('Press').addClass('queryButtonMood').addClass('skin').on( 'click', linkEvent('#') ) )

            // Appending the button menu to the DOM - `#main` element
            .appendTo( '#main' );



        // remove the class that makes the menu invisible
        if ('requestAnimationFrame' in window) {
            window.requestAnimationFrame( removeIsMainInvisble );
        } else if ('webkitRequestAnimationFrame' in window) {
            window.webkitRequestAnimationFrame( removeIsMainInvisble );
        } else {
            window.setTimeout( removeIsMainInvisble, 0 );
        }
    }



    // the init function - also call it self
    (function init() {
        // iOS / Android - touch hack fix by sniff user agent - maybe better to use modernizr touch event detect - but not sure it's a problem of all Webkit
        document.documentElement.className += ((/(like Mac OS X)|(Android)/i.test(window.navigator.userAgent)) ? ' touch-fix' : ' no-touch-fix');

        // Makes the menu invisible for fading in animation
        document.documentElement.className += ' is-main-invisible';

        // Makes sure everything is work when blocking render
        document.addEventListener( 'DOMContentLoaded', onload, false );
    } ());


} (window, document, Btn, FastClick) );

(function ($, root, undefined) {

    $(function () {

        'use strict';
});

    $(document).ready(function(){
        $(".nav__hamburger-icon").click(function(){
            // open menu
            $(".nav__hamburger-icon").toggleClass("nav__open");
            // apply a faded black overlay on the rest of the site when menu is open.
            $('.menu-overlay-js').toggleClass("menu-overlay__open");
        });

        // $(".nav__hamburger-icon .nav__open").click(function(){

        // }

        // $( "#book" ).fadeOut( "slow", function() {
        //     // Animation complete.
        //   });

        // var x = document.getElementsByClassName("menu-overlay__open");

        // if (x == false) {
        //     $(".nav__hamburger-icon").addClass("hidden");
        // }

    // When the user scrolls down 80px from the top of the document, make the nav bar smaller
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {

        var headingNavBar = document.getElementById("navbar-js");
        
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            headingNavBar.classList.add("sticky");
        } else {
            headingNavBar.classList.remove("sticky");
        }
    }

});

})(jQuery, this);
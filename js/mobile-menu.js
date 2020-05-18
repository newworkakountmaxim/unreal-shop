jQuery( document ).ready(function( $ ) {

    $('#menuClose').click( function (e) {
        e.preventDefault();
        document.getElementById("menuClose").style.display = "none";
        document.getElementById("menuOpen").style.display = "block";
        document.getElementById("mobileMenu").style.opacity = "0";
        document.getElementById("mobileMenu").style.left = "-100%";
    });

    $('#menuOpen').click( function (e) {
        e.preventDefault();
        document.getElementById("menuOpen").style.display = "none";
        document.getElementById("menuClose").style.display = "block";
        document.getElementById("mobileMenu").style.opacity = "1";
        document.getElementById("mobileMenu").style.left = "0";
    });

});

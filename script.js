$(document).ready(function() {

    $('.js--scroll-to-about').click(function () {
        $('html, body').animate({scrollTop: $('.js--about').offset().top}, 1000);
    });

})

window.scrollBy({ 
    top: 100, // could be negative value
    left: 0, 
    behavior: 'smooth' 
  });
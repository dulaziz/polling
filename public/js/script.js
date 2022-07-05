// Shadow Sticky Nav
$(window).scroll(function() {
    if ($(window).scrollTop() > 10) {
        $('#navBar').addClass('floatingNav');
    } else {
        $('#navBar').removeClass('floatingNav');
    }
});

$(document).ready(function() {
    alert('Tes')
    });
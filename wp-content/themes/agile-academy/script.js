
$(document).ready(function () {
    $(".owl-carousel").owlCarousel();
   
});
$('.team').owlCarousel({
    loop: true,
    margin: 40,
    dots: false,
    responsive: {
        320: {
            items: 1
        },
        768: {
            items: 2
        },
        1440: {
            items: 3
        }
    }
})
$('.quote').owlCarousel({
    // loop:true,
    margin: 40,
    items: 1,
    dots: false,
    responsive: {
        320: {
            items: 1
        },
        768: {
            items: 1
        },
        1440: {
            items: 1
        }
    }

})

function next() {
    $(".team").trigger('next.owl.carousel');
}

function previous() {
    $(".team").trigger('prev.owl.carousel');
}
function nextquote() {
    $(".quote").trigger('next.owl.carousel');
}
function previousquote() {
    $(".quote").trigger('prev.owl.carousel');
}

window.addEventListener("load", function() {

    new Glider(document.querySelector('.lista'), {
        slidesToShow: 5,
        slidesToScroll: 3,
        draggable: true,
        dots: '.indicadores"',
        arrows: {
            prev: '.anterior',
            next: '.siguiente'
        }
    });

})

window.addEventListener("load", function() {
    new Glider(document.querySelector('.sor'), {
        slidesToShow: 4,
        slidesToScroll: 3,
        draggable: true,
        dots: '.marcadores"',
        arrows: {
            prev: '.ante',
            next: '.dos'
        }
    });
})